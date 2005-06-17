<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id: archive.php,v 1.3 2004/07/24 15:04:08 gaugau Exp $
// ------------------------------------------------------------------------- //

/*--------------------------------------------------
 | TAR/GZIP/ZIP ARCHIVE CLASSES
 | By Devin Doucette
 | Copyright (c) 2003 Devin Doucette
 | Email: darksnoopy@shaw.ca
 +--------------------------------------------------
 | Email bugs/suggestions to darksnoopy@shaw.ca
 +--------------------------------------------------
 | This script has been created and released under
 | the GNU GPL and is free to use and redistribute
 | only if this copyright statement is not removed
 +--------------------------------------------------*/

/*------------------------------------------------------------
 | To create tar files:
 | $example = new tarfile($cwd,$flags); // args optional
 | -current working directory
 | -flags (array):
 |  -overwrite - whether to overwrite existing files or return
 |    an error message
 |  -defaultperms - default file permissions (like chmod(),
 |    must include 0 in front of value [eg. 0777, 0644])
 |  -recursesd[1,0] - whether or not to include subdirs
 |  -storepath[1,0] - whether or not to store relative paths
 |  -replacestats[array] - values to replace those from files
 |   -mode - same as the result of a fileperms() call
 |   -uid/gid - user/group id
 |   -time - timestamp
 |   -type - file type (5=dir,1=link,0=file)
 |   -link - the file that is linked to
 |   -path - only supported in USTAR, not recommended
 +------------------------------------------------------------*/

/*------------------------------------------------------------
 | To create gzip files:
 | $example = new gzfile($cwd,$flags); // args optional
 | -current working directory
 | -flags (array):
 |  -overwrite - whether to overwrite existing files or return
 |    an error message
 |  -defaultperms - default file permissions (like chmod(),
 |    must include 0 in front of value [eg. 0777, 0644])
 +------------------------------------------------------------*/

/*------------------------------------------------------------
 | To create zip files:
 | $example = new zipfile($cwd,$flags); // args optional
 | -current working directory
 | -flags (array):
 |  -overwrite - whether to overwrite existing files or return
 |    an error message
 |  -defaultperms - default file permissions (like chmod(),
 |    must include 0 in front of value [eg. 0777, 0644])
 |  -time - timestamp to use to replace the mtime from files
 |  -recursesd[1,0] - whether or not to include subdirs
 |  -storepath[1,0] - whether or not to store relative paths
 |  -level[0-9] - compression level (0 = none, 9 = max)
 |  -comment - comment to add to the archive
 +------------------------------------------------------------*/

/*------------------------------------------------------------
 | To add files:
 | $example->addfile($data,$filename,$flags);
 | -data - file contents
 | -filename - name of file to be put in archive
 | -flags (all flags are optional)
 | -flags (tar) [array]: -same flags as tarfile()
 | -flags (gzip) [string]: -comment to add to archive
 | -flags (zip) [array] -time - last modification time
 |
 | $example->addfiles($filelist); // tar and zip only
 | -filelist - array of file names relative to CWD
 |
 | $example->adddirectories($dirlist); // tar and zip only
 | -dirlist - array of directory names relative to CWD
 +------------------------------------------------------------*/

/*------------------------------------------------------------
 | To output files:
 | $example->getdata();
 | -returns file contents
 |
 | $example->filedownload($filename);
 | -filename - the name to give the file that is being sent
 |
 | $example->filewrite($filename,$perms); // perms optional
 | -filename - the name (including path) of the file to write
 | -perms - permissions to give the file after it is written
 +------------------------------------------------------------*/

/*------------------------------------------------------------
 | To extract files (tar and gzip)
 | $example->extract($data);
 | -data - data to extract files from
 | -returns an array containing file attributes and contents
 |
 | $example->extractfile($filename);
 | -filename - the name (including path) of the file to use
 | -returns an array containing file attributes and contents
 |
 | Both functions will return a string containing any errors
 +------------------------------------------------------------*/

class tarfile extends archive {
        var $cwd                        = "./";
        var $tardata                = "";
        var $defaultflags        = array(
                'mode'        => 0,
                'uid'        => 0,
                'gid'        => 0,
                'time'        => 0,
                'type'        => 0,
                'link'        => "",
                'path'        => "",
        );
        var $replacestats        = array();
        var $recursesd                = 1;
        var $storepath                = 1;

        function tarfile($cwd="./",$flags=array()) {
                $this->cwd = $cwd;
                $this->defaultflags['mode'] = decoct(0x8000 | 0x0100 | 0x0080 | 0x0020 | 0x0004);
                $this->defaultflags['time'] = time();
                if(isset($flags['recursesd']))
                        $this->recursesd = $flags['recursesd'];
                if(isset($flags['storepath']))
                        $this->storepath = $flags['storepath'];
                if(isset($flags['replacestats'])) {
                        if(is_array($flags['replacestats'])) {
                                if(isset($flags['replacestats']['mode']))
                                        $this->replacestats['mode'] = $flags['replacestats']['mode'];
                                if(isset($flags['replacestats']['time']))
                                        $this->replacestats['time'] = $flags['replacestats']['time'];
                        }
                        else if($flags['replacestats'] == 1) {
                                $this->replacestats['mode'] = $this->defaultflags['mode'];
                                $this->replacestats['time'] = $this->defaultflags['time'];
                        }
                }

                $this->archive($flags);
        }

        function addfile($data,$filename,$flags=array()) {
                if(strlen($filename) > 99)
                        return $this->error("The file name $filename is too long to archive.");

                $flags['mode'] = isset($this->replacestats['mode'])? $this->replacestats['mode'] : (isset($flags['mode'])? $flags['mode'] : $this->defaultflags['mode']);
                $flags['uid'] = isset($flags['uid'])? $flags['uid'] : $this->defaultflags['uid'];
                $flags['gid'] = isset($flags['gid'])? $flags['gid'] : $this->defaultflags['gid'];
                $flags['time'] = isset($this->replacestats['time'])? $this->replacestats['time'] : (isset($flags['time'])? $flags['time'] : $this->defaultflags['time']);
                $flags['type'] = isset($flags['type'])? $flags['type'] : $this->defaultflags['type'];
                $flags['link'] = isset($flags['link'])? $flags['link'] : $this->defaultflags['link'];
                $flags['path'] = isset($flags['path'])? $flags['path'] : $this->defaultflags['path'];
                $flags['size'] = isset($flags['size'])? $flags['size'] : strlen($data);

                if($this->storepath != 1) {
                        $filename = strstr($filename,"/")? substr($filename,strrpos($filename,"/")+1) : $filename;
                        $flags['path'] = "";
                }
                else
                        $filename = preg_replace("/^(\.{1,2}(\/|\\\))+/","",$filename);

                $blockbeg = pack("a100a8a8a8a12a12",$filename,$flags['mode'],sprintf("%6s ",decoct($flags['uid'])),sprintf("%6s ",decoct($flags['gid'])),sprintf("%11s ",decoct($flags['size'])),sprintf("%11s ",decoct($flags['time'])));
                $blockend = pack("a1a100a6a2a32a32a8a8a155",$flags['type'],$flags['link'],"ustar","00","Unknown","Unknown","","",$flags['path']);

                $checksum = 0;
                for($i = 0; $i < 148; $i++)
                        $checksum += ord(substr($blockbeg,$i,1));
                for($i = 148; $i < 156; $i++)
                        $checksum += ord(" ");
                for($i = 156; $i < 512; $i++)
                        $checksum += ord(substr($blockend,$i-156,1));
                $checksum = pack("a8",sprintf("%6s ",decoct($checksum)));

                if($flags['size'] % 512 > 0)
                        $data .= $this->nullpad(512 - $flags['size'] % 512);

                $this->tardata .= $blockbeg . $checksum . $blockend . pack("a12","") . $data;
        }

        function addfiles($filelist) {
                $pwd = getcwd();
                @chdir($this->cwd);

                foreach($filelist as $current) {
                        $file = array();

                        if($this->storepath != 1)
                                $file['name'] = strstr($current,"/")? substr($current,strrpos($current,"/")+1) : $current;
                        else
                                $file['name'] = preg_replace("/^(\.{1,2}(\/|\\\))+/","",$current);

                        $file['mode'] = @fileperms($current);
                        if($file['mode'] & 0x4000)
                                $file['type'] = 5;        // Directory
                        else if($file['mode'] & 0x8000)
                                $file['type'] = 0;        // Regular
                        else if($file['mode'] & 0xA000)
                                $file['type'] = 1;        // Link
                        else
                                $file['type'] = 9;        // Unknown
                        $file['mode'] = decoct($file['mode']);

                        if($file['type'] == 0 && !@file_exists($current))
                                return $this->error("$current does not exist");
                        else if(strlen($file['name']) > 99) {
                                $offset = strrpos($file['name'],"/") + 1;
                                $file['path'] = substr($file['name'],0,$offset);
                                $file['name'] = substr($file['name'],$offset);
                                if(strlen($file['name']) > 99 || strlen($file['path']) > 154)
                                        return $this->error("The file name {$file['name']} is too long to archive.");
                        }
                        else
                                $file['path'] = "";

                        $stat = stat($current);

                        if(($file['type'] == 0 || $file['type'] == 1) && $fp = @fopen($current,"rb")) {
                                $data = fread($fp,$stat[7]);
                                fclose($fp);
                        }
                        else
                                $data = "";

                        $flags = array(
                                'mode'        => $file['mode'],
                                'uid'        => $stat[4],
                                'gid'        => $stat[5],
                                'size'        => $stat[7],
                                'time'        => $stat[9],
                                'type'        => $file['type'],
                                'link'        => $file['type'] == 1? @readlink($current) : "",
                                'path'        => $file['path'],
                        );

                        $this->addfile($data,$file['name'],$flags);
                }

                @chdir($pwd);
        }

        function extract($data) {
                $return = array();
                $blocks = strlen($data)/512 - 1;
                $offset = 0;

                while($offset < $blocks) {
                        $header = substr($data,512*$offset,512);
                        $current = unpack("a100filename/a8mode/a8uid/a8gid/a12size/a12mtime/a8checksum/a1type/a100linkname/a6magic/a2version/a32uname/a32gname/a8devmajor/a8devminor/a155path",$header);
                        foreach($current as $k => $v)
                                $current[$k] = trim($v);
                        $current['mode'] = octdec($current['mode']);
                        $current['uid'] = octdec($current['uid']);
                        $current['gid'] = octdec($current['gid']);
                        $current['size'] = octdec($current['size']);
                        $current['mtime'] = octdec($current['mtime']);
                        $current['checksum'] = octdec($current['checksum']);
                        $current['type'] = octdec($current['type']);

                        if($this->storepath != 1)
                                $current['filename'] = substr($current['filename'],strrpos($current['filename'],"/")+1);

                        $checksum = 0;
                        for($i = 0; $i < 148; $i++)
                                $checksum += ord(substr($header,$i,1));
                        for($i = 148; $i < 156; $i++)
                                $checksum += ord(" ");
                        for($i = 156; $i < 512; $i++)
                                $checksum += ord(substr($header,$i,1));
                        if($current['checksum'] != $checksum)
                                return $this->error("Checksum error.");

                        $size = ceil($current['size']/512);
                        $current['data'] = substr($data,512*(++$offset),$current['size']);
                        $offset += $size;
                        $return[] = $current;
                }

                return $return;
        }

        function getdata() {
                return $this->tardata . pack("a512","");
        }

        function filedownload($filename) {
                @header("Content-type: application/x-tar");
                @header("Content-disposition: attachment; filename=$filename");

                print($this->getdata());
        }

        function nullpad($bytes) {
                $return = "";
                for($i = 0; $i < $bytes; ++$i)
                        $return .= "\0";
                return $return;
        }
}

class gzfile extends archive {
        var $gzdata = "";

        function addfile($data,$filename=null,$comment=null) {
                $flags = bindec("000".(!empty($comment)? "1" : "0").(!empty($filename)? "1" : "0")."000");
                $this->gzdata .= pack("C1C1C1C1VC1C1",0x1f,0x8b,8,$flags,time(),2,0xFF);

                if(!empty($filename))
                        $this->gzdata .= "$filename\0";

                if(!empty($comment))
                        $this->gzdata .= "$comment\0";

                $this->gzdata .= gzdeflate($data);

                $this->gzdata .= pack("VV",crc32($data),strlen($data));
        }

        function extract($data) {
                $id = unpack("H2id1/H2id2",substr($data,0,2));
                if($id['id1'] != "1f" || $id['id2'] != "8b")
                        return $this->error("Not valid gzip data.");

                $temp = unpack("Cflags",substr($data,2,1));
                $temp = decbin($temp['flags']);
                if($temp & 0x8)
                        $flags['name'] = 1;
                if($temp & 0x4)
                        $flags['comment'] = 1;

                $offset = 10;

                $filename = "";
                while(!empty($flags['name'])) {
                        $char = substr($data,$offset,1);
                        $offset++;
                        if($char == "\0")
                                break;
                        $filename .= $char;
                }
                if($filename == "")
                        $filename = "file";

                $comment = "";
                while(!empty($flags['comment'])) {
                        $char = substr($data,$offset,1);
                        $offset++;
                        if($char == "\0")
                                break;
                        $comment .= $char;
                }

                $temp = unpack("Vcrc32/Visize",substr($data,strlen($data)-8,8));
                $crc32 = $temp['crc32'];
                $isize = $temp['isize'];

                $data = gzinflate(substr($data,$offset,strlen($data)-8-$offset));

                if($crc32 != crc32($data))
                        return $this->error("Checksum error");

                return array('filename'=>$filename,'comment'=>$comment,'size'=>$isize,'data'=>$data);
        }

        function getdata() {
                return $this->gzdata;
        }

        function filedownload($filename) {
                @header("Content-type: application/x-gzip");
                @header("Content-disposition: attachment; filename=$filename");

                print($this->getdata());
        }
}

class zipfile extends archive {
        var $cwd                = "./";
        var $comment        = "";
        var $level                = 9;
        var $offset                = 0;
        var $recursesd        = 1;
        var $storepath        = 1;
        var $replacetime        = 0;
        var $central        = array();
        var $zipdata        = array();

        function zipfile($cwd="./",$flags=array()) {
                $this->cwd = $cwd;
                if(isset($flags['time']))
                        $this->replacetime = $flags['time'];
                if(isset($flags['recursesd']))
                        $this->recursesd = $flags['recursesd'];
                if(isset($flags['storepath']))
                        $this->storepath = $flags['storepath'];
                if(isset($flags['level']))
                        $this->level = $flags['level'];
                if(isset($flags['comment']))
                        $this->comment = $flags['comment'];

                $this->archive($flags);
        }

        function addfile($data,$filename,$flags=array()) {
                if($this->storepath != 1)
                        $filename = strstr($filename,"/")? substr($filename,strrpos($filename,"/")+1) : $filename;
                else
                        $filename = preg_replace("/^(\.{1,2}(\/|\\\))+/","",$filename);

                $mtime = !empty($this->replacetime)? getdate($this->replacetime) : (isset($flags['time'])? getdate($flags['time']) : getdate());
                $mtime = preg_replace("/(..){1}(..){1}(..){1}(..){1}/","\\x\\4\\x\\3\\x\\2\\x\\1",dechex(($mtime['year']-1980<<25)|($mtime['mon']<<21)|($mtime['mday']<<16)|($mtime['hours']<<11)|($mtime['minutes']<<5)|($mtime['seconds']>>1)));
                eval('$mtime = "'.$mtime.'";');

                $crc32 = crc32($data);
                $normlength = strlen($data);
                if(function_exists('gzcompress') ){
                        $data = gzcompress($data,$this->level);
                }
                $data = substr($data,2,strlen($data)-6);
                $complength = strlen($data);

                $this->zipdata[] = "\x50\x4b\x03\x04\x14\x00\x00\x00\x08\x00".$mtime.pack("VVVvv",$crc32,$complength,$normlength,strlen($filename),0x00).$filename.$data.pack("VVV",$crc32,$complength,$normlength);
                $this->central[] = "\x50\x4b\x01\x02\x00\x00\x14\x00\x00\x00\x08\x00".$mtime.pack("VVVvvvvvVV",$crc32,$complength,$normlength,strlen($filename),0x00,0x00,0x00,0x00,0x0000,$this->offset).$filename;

                $this->offset = strlen(implode("",$this->zipdata));
        }

        function addfiles($filelist) {
                $pwd = getcwd();
                @chdir($this->cwd);

                foreach($filelist as $current) {
                        if(!@file_exists($current))
                                continue;

                        $stat = stat($current);

                        if($fp = @fopen($current,"rb")) {
                                $data = fread($fp,$stat[7]);
                                fclose($fp);
                        }
                        else
                                $data = "";

                        $flags = array('time'=>$stat[9]);

                        $this->addfile($data,$current,$flags);
                }

                @chdir($pwd);
        }

        function getdata() {
                $central = implode("",$this->central);
                $zipdata = implode("",$this->zipdata);
                return $zipdata.$central."\x50\x4b\x05\x06\x00\x00\x00\x00".pack("vvVVv",sizeof($this->central),sizeof($this->central),strlen($central),strlen($zipdata),strlen($this->comment)).$this->comment;
        }

        function filedownload($filename) {
                @header("Content-type: application/zip");
                @header("Content-disposition: attachment; filename=$filename");

                print($this->getdata());
        }
}

class archive {
        var $overwrite                = 0;
        var $defaultperms        = 0644;

        function archive($flags=array()) {
                if(isset($flags['overwrite']))
                        $this->overwrite = $flags['overwrite'];
                if(isset($flags['defaultperms']))
                        $this->defaultperms = $flags['defaultperms'];
        }

        function adddirectories($dirlist) {
                $pwd = getcwd();
                @chdir($this->cwd);

                $filelist = array();

                foreach($dirlist as $current) {
                        if(@is_dir($current)) {
                                $temp = $this->parsedirectories($current);
                                foreach($temp as $filename)
                                        $filelist[] = $filename;
                        }
                        else if(@file_exists($current))
                                $filelist[] = $current;
                }

                @chdir($pwd);
                $this->addfiles($filelist);
        }

        function parsedirectories($dirname) {
                $filelist = array();
                $dir = @opendir($dirname);

                while($file = @readdir($dir)) {
                        if($file == "." || $file == "..")
                                continue;
                        else if(@is_dir($dirname."/".$file)) {
                                if($this->recursesd != 1)
                                        continue;
                                $temp = $this->parsedirectories($dirname."/".$file);
                                foreach($temp as $file2)
                                        $filelist[] = $file2;
                        }
                        else if(@file_exists($dirname."/".$file))
                                $filelist[] = $dirname."/".$file;
                }

                @closedir($dir);

                return $filelist;
        }

        function filewrite($filename,$perms=null) {
                if($this->overwrite != 1 && @file_exists($filename))
                        return $this->error("File $filename already exists.");

                if(@file_exists($filename))
                        @unlink($filename);

                $fp = @fopen($filename,"wb");

                if(!fwrite($fp,$this->getdata()))
                        return $this->error("Could not write data to $filename.");

                @fclose($fp);

                if(!isset($perms))
                        $perms = $this->defaultperms;

                @chmod($filename,$perms);
        }

        function extractfile($filename) {
                if($fp = @fopen($filename,"rb")) {
                        return $this->extract(fread($fp,filesize($filename)));
                        @fclose($fp);
                }
                else
                        return $this->error("Could not open $filename.");
        }

        function error($error) {
                $this->errors[] = $error;
                return 0;
        }
} ?>
