<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.3.3
  $Source: /cvsroot/coppermine/stable/include/imageObjectIM.class.php,v $
  $Revision: 1.4 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

class imageObject{

         // image resource
         var $imgRes;
         // px
         var $height=0;
         var $width=0;
         // for img height/width tags
         var $string;
         // output report or error message
         var $message;
         // file + dir
         var $directory;
         var $filename;
         // output quality, 0 - 100
         var $quality;

         //constructor
         function imageObject($directory,$filename,$previous=null)
        {
        $this->directory = $directory;
        $this->filename = $filename;
        $this->previous = $previous;
        $this->truecolor = true;

        if (file_exists($directory.$filename)){
                        $this->filesize = round(filesize($directory.$filename)/1000);
                        if($this->filesize>0){
                                $size = @GetImageSize($directory.$filename);
                                // For IM we don't need an Image Resource (work directly on file :)
                                if ($size && !$this->imgRes) {
                                        $this->imgRes = true;
                                }

                                $this->width = $size[0];
                                $this->height = $size[1];
                                $this->string = $size[3];
                                }
                        }// if
        }// constructor

         function cropImage(&$clipval)
         {
             global $CONFIG;
                                 $cliparray = split(",",$clipval);
             $clip_top = $cliparray[0];
             $clip_right = $cliparray[1];
             $clip_bottom = $cliparray[2];
             $clip_left = $cliparray[3];

             $new_w = $clip_right - $clip_left;
             $new_h = $clip_bottom - $clip_top;


             $imgFile = escapeshellarg("$this->directory$this->filename");


             $output = array();

                                 /*
                                * Hack for working with ImageMagick on WIndows even if IM is installed in C:\Program Files.
                                * Also the options for -crop should not have space in between them.
                                * By Aditya Mooley <aditya@sanisoft.com>
                                */
                                if (eregi("win",$_ENV['OS'])) {
                                    $imgFile = str_replace("'","\"" ,$imgFile );
                                         $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -crop {$new_w}x{$new_h}+{$clip_left}+{$clip_top} ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
                                         exec ("\"$cmd\"", $output, $retval);
                                } else {
                                    $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -crop '{$new_w}x{$new_h} +{$clip_left} +{$clip_top}' $imgFile $imgFile";
                                         exec ($cmd, $output, $retval);
                                }
                                 //$cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -crop '{$new_w}x{$new_h} +{$clip_left} +{$clip_top}' $imgFile $imgFile";
             //exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

                 // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);

             return $this;

         }

         function rotateImage(&$angle){

             global $CONFIG;
                                 $imgFile = escapeshellarg("$this->directory$this->filename");

             $output = array();

                                 /*
                                * Hack for working with ImageMagick on WIndows even if IM is installed in C:\Program Files.
                                * By Aditya Mooley <aditya@sanisoft.com>
                                */

                                if (eregi("win",$_ENV['OS'])) {
                                    $imgFile = str_replace("'","\"" ,$imgFile );
                                         $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -rotate $angle ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
                                         exec ("\"$cmd\"", $output, $retval);
                                } else {
                                    $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -rotate '$angle' $imgFile $imgFile";
                                         exec ($cmd, $output, $retval);
                                }
             //$cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -rotate '$angle' $imgFile $imgFile";
             //exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

             // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);
             return $this;

         }


         function resizeImage($new_w=0,$new_h=0){

             global $CONFIG;
                                 $imgFile = escapeshellarg("$this->directory$this->filename");

             $output = array();

                                 /*
                                * Hack for working with ImageMagick on WIndows even if IM is installed in C:\Program Files.
                                * By Aditya Mooley <aditya@sanisoft.com>
                                */
                                if (eregi("win",$_ENV['OS'])) {
                                    $imgFile = str_replace("'","\"" ,$imgFile );
                                         $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$this->quality} {$CONFIG['im_options']} -geometry {$new_w}x{$new_h} ".str_replace("\\","/" ,$imgFile )." ".str_replace("\\","/" ,$imgFile );
                                         exec ("\"$cmd\"", $output, $retval);
                                } else {
                                    $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -geometry '{$new_w}x{$new_h}' $imgFile $imgFile";
                                         exec ($cmd, $output, $retval);
                                }

            //$cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -geometry '{$new_w}x{$new_h}' $imgFile $imgFile";
            //exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

             // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);
             return $this;

         }


   }
 ?>