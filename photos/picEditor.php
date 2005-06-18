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
  $Source: /cvsroot/coppermine/stable/picEditor.php,v $
  $Revision: 1.4 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

// embedded images
function cornerleft()
  {
    header("Content-type: image/gif");
    header("Content-length: 290");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zu8d3h5tXb4dbW1s/V3czU2sXN1c'.
'PK0cPExMHCw7y+wLW1tbC2va6yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWfICCOZGmeaHoqysI8CZG4sEzHSZ6I'.
'CeJEEULg8AsOi0IgULRACgoNIOEZDQoGyoiIAUwECkUvuBvAZk'.
'UPI1F6ZBuyS0Ds6RxbzXCR0C4Ol+FKPAdVQmtGb4BxTVJ0jHiJ'.
'W2R8f4mBAGmFSAGIlXFzdlOPnXpffqKjcoNunYBMTqeskRFesL'.
'GXh6yVPKG5ugBCtb08vbYJxKjGx5ByyokhADs='.
'');
}
function cornerright()
  {
    header("Content-type: image/gif");
    header("Content-length: 292");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zv8t3h5tXc5NbW1s/V3dHS08XN1c'.
'PK0cLDw8HCw7y+wLW1ta+0u66yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWhYCSOZGlGCQCc7JmubSy+skzX5xAY'.
'Km4OAsLNJyrsIo8eMaJTiBhKH9AgciyiNSM10jgMZc2qFtuaih'.
'qF4JelPR+OSVg54Iw4jIknuWTmprdWeyNtXG9bXWsjYXZ4YjuC'.
'fWgCh2lCe4RdR4VwZIt3AXmMoHpyTAOUk2d/Z1elAQRVb7B2sm'.
'cILwm5CQYJDwwLu72/wb7ALyrIycrLzM3OyyEAOw=='.
'');
}

// image calls
if (isset($_GET['img'])) {
  if ($_GET['img']=="left") {cornerleft();exit;}
}
if (isset($_GET['img'])) {
  if ($_GET['img']=="right") {cornerright();exit;}
}


define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

define('IMG_DIR', $CONFIG['fullpath'].'edit/');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);


if (isset($HTTP_GET_VARS['id'])) {
        $pid = (int)$HTTP_GET_VARS['id'];
} elseif (isset($HTTP_POST_VARS['id'])) {
        $pid = (int)$HTTP_POST_VARS['id'];
} else {
        $pid = -1;
}
if ($pid > 0){

        $result = db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'");
        $CURRENT_PIC = mysql_fetch_array($result);
        mysql_free_result($result);
        $pic_url = get_pic_url($CURRENT_PIC,'fullsize');

}

//Garbage collection run at an probability of 25% and delete all files older than one hour
if (rand(1,100) < 25){
$d = opendir(IMG_DIR);

        while ($file = readdir($d)){
                if (is_file(IMG_DIR.$file) && ((time() - filemtime(IMG_DIR.$file))/60) > 60 && $file !="index.html" ){
                        @unlink(IMG_DIR.$file);
                }

        }
}

//Include the proper class for image Object
if ($CONFIG['thumb_method']=="gd2"){
           require("include/imageObjectGD.class.php");
}elseif ($CONFIG['thumb_method']=="im"){
        require("include/imageObjectIM.class.php");
}else{
        die ("Editor class for your resize method not implemented");
}

//////////////////////////////////Main script//////////////////////////////////////
// PREVENTING CACHING
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                     // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0

// PAGE INIT
if (!$img_dir) $img_dir = IMG_DIR;


if ($_GET['id']){
   //Copy the Image file to the editing directory
   if (copy($CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'],$img_dir.$CURRENT_PIC['filename']))
   $newimage = $CURRENT_PIC['filename'];
}else if(!isset($newimage)){
   $newimage = $_POST['newimage'];
}

   if ($newimage){
      $imgObj = new imageObject($img_dir,$newimage);
      if ($_POST['quality']){
                      $imgObj->quality = $_POST['quality'];
        }

      if ($imgObj->imgRes){
          if ($_POST['clipval'] && $_POST['cropping']==true){
                  $imgObj = $imgObj->cropImage($_POST['clipval']);
          }

          if ($_POST['angle']<>0){
                  $imgObj = $imgObj->rotateImage($_POST['angle']);
          }


      }
      $newimage = $imgObj->filename;
   }//   newimage

   if(isset($_POST["save"])) {

                $width=$imgObj->width;
        $height=$imgObj->height;
                $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
                $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
                $filesize = @filesize($img_dir.$newimage);

          //Full image replace
          copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'])   ;

          // Normal image resized and replace, use the CPG resize method instead of the object resizeImage
          // as using the object resizeImage will make the final display of image to be a thumbnail in the editor

          if (max($width, $height) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']) {
                resize_image($img_dir.$newimage, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
          } else {
                @unlink($normal);
          }

          //thumbnail resized and replace
               resize_image($img_dir.$newimage, $thumbnail, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
                       $total_filesize = $filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

          //Update the image size in the DB
          db_query("UPDATE {$CONFIG['TABLE_PICTURES']}
                          SET pheight = $height,
                            pwidth = $width,
                                                        filesize = $filesize,
                                                        total_filesize = $total_filesize
                          WHERE pid = '$pid'");

          $message = "Picture successfully saved - you can close this window now";

   }

   if(isset($_POST["save_thumb"])) {

        $width=$imgObj->width;
        $height=$imgObj->height;
                $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
                $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
                $currentPic = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CURRENT_PIC['filename'];

        //Calculate the thumbnail dimensions
        if ($CONFIG['thumb_use'] == 'ht') {
                $ratio = $height / $CONFIG['thumb_width'] ;
        } elseif ($CONFIG['thumb_use'] == 'wd') {
                $ratio = $width / $CONFIG['thumb_width'] ;
        } else {
                $ratio = max($width, $height) / $CONFIG['thumb_width'] ;
        }
        $ratio = max($ratio, 1.0);
        $dstWidth = (int)($width / $ratio);
        $dstHeight = (int)($height / $ratio);
        $imgObj->quality = (int)($_POST['quality']);
        $imgObj = $imgObj->resizeImage($dstWidth,$dstHeight);
        $newimage = $imgObj->filename;

        copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CONFIG['thumb_pfx'].$CURRENT_PIC['filename'])   ;

        $total_filesize = filesize($currentPic) + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

          //Update the image size in the DB
          db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = $total_filesize WHERE pid = '$pid'");


        $message = "Thumbnail successfully saved - you can close this window now";

   }

?>
<html>
<meta http-equiv="imagetoolbar" content="no" />
<head>
    <title><?php echo $lang_editpics_php['crop_title'] ?></title>
    <?php if($imgObj){?>
    <script language="JavaScript1.2">

    /****************************************************************************
    DHTML library from DHTMLCentral.com
    *   Copyright (C) 2001 Thomas Brattli 2001
    *   This script was released at DHTMLCentral.com
    *   Visit for more great scripts!
    *   This may be used and changed freely as long as this msg is intact!
    *   We will also appreciate any links you could give us.
    *
    *   Made by Thomas Brattli 2001
    ***************************************************************************/
    //Browsercheck (needed) ***************
    function lib_bwcheck(){
      this.ver=navigator.appVersion
      this.agent=navigator.userAgent
      this.dom=document.getElementById?1:0
      this.opera5=this.agent.indexOf("Opera 5")>-1
      this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0;
      this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
      this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
      this.ie=this.ie4||this.ie5||this.ie6
      this.mac=this.agent.indexOf("Mac")>-1
      this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0;
      this.ns4=(document.layers && !this.dom)?1:0;
      this.bw=(this.ie6||this.ie5||this.ie4||this.ns4||this.ns6||this.opera5)
      return this
    }
    bw=new lib_bwcheck() //Browsercheck object

    //Debug function ******************
    function lib_message(txt){alert(txt); return false}

    //Lib objects  ********************
    function lib_obj(obj,nest){
      if(!bw.bw) return lib_message('Old browser')
      nest=(!nest) ? "":'document.'+nest+'.'
      this.evnt=bw.dom? document.getElementById(obj):
        bw.ie4?document.all[obj]:bw.ns4?eval(nest+"document.layers." +obj):0;
      if(!this.evnt) return lib_message('The layer does not exist ('+obj+')'
        +'- \nIf your using Netscape please check the nesting of your tags!')
      this.css=bw.dom||bw.ie4?this.evnt.style:this.evnt;
      this.ref=bw.dom||bw.ie4?document:this.css.document;
      this.x=parseInt(this.css.left)||this.css.pixelLeft||this.evnt.offsetLeft||0;
      this.y=parseInt(this.css.top)||this.css.pixelTop||this.evnt.offsetTop||0
      this.w=this.evnt.offsetWidth||this.css.clip.width||
        this.ref.width||this.css.pixelWidth||0;
      this.h=this.evnt.offsetHeight||this.css.clip.height||
        this.ref.height||this.css.pixelHeight||0
      this.c=0 //Clip values
      if((bw.dom || bw.ie4) && this.css.clip) {
      this.c=this.css.clip; this.c=this.c.slice(5,this.c.length-1);
      this.c=this.c.split(' ');
      for(var i=0;i<4;i++){this.c[i]=parseInt(this.c[i])}
      }
      this.ct=this.css.clip.top||this.c[0]||0;
      this.cr=this.css.clip.right||this.c[1]||this.w||0
      this.cb=this.css.clip.bottom||this.c[2]||this.h||0;
      this.cl=this.css.clip.left||this.c[3]||0
      this.obj = obj + "Object"; eval(this.obj + "=this")
      return this
    }

    //Moving object to **************
    lib_obj.prototype.moveIt = function(x,y){
      this.x=x;this.y=y; this.css.left=x;this.css.top=y
    }

    //Moving object by ***************
    lib_obj.prototype.moveBy = function(x,y){
      this.css.left=this.x+=x; this.css.top=this.y+=y
    }

    //Showing object ************
    lib_obj.prototype.showIt = function(){this.css.visibility="visible"}

    //Hiding object **********
    lib_obj.prototype.hideIt = function(){this.css.visibility="hidden"}

    //Changing backgroundcolor ***************
    lib_obj.prototype.bg = function(color){
        if(bw.opera) this.css.background=color
        else if(bw.dom || bw.ie4) this.css.backgroundColor=color
        else if(bw.ns4) this.css.bgColor=color
    }

    //Writing content to object ***
    lib_obj.prototype.writeIt = function(text,startHTML,endHTML){
        if(bw.ns4){
        if(!startHTML){startHTML=""; endHTML=""}
          this.ref.open("text/html");
        this.ref.write(startHTML+text+endHTML);
        this.ref.close()
        }else this.evnt.innerHTML=text
    }

    //Clipping object to ******
    lib_obj.prototype.clipTo = function(t,r,b,l,setwidth){
      this.ct=t; this.cr=r; this.cb=b; this.cl=l
      if(bw.ns4){
        this.css.clip.top=t;this.css.clip.right=r
        this.css.clip.bottom=b;this.css.clip.left=l
      }else{
        if(t<0)t=0;if(r<0)r=0;if(b<0)b=0;if(b<0)b=0
        this.css.clip="rect("+t+","+r+","+b+","+l+")";
        if(setwidth){this.css.pixelWidth=this.css.width=r;
        this.css.pixelHeight=this.css.height=b}
      }
    }

    //Clipping object by ******
    lib_obj.prototype.clipBy = function(t,r,b,l,setwidth){
      this.clipTo(this.ct+t,this.cr+r,this.cb+b,this.cl+l,setwidth)
    }

    //Clip animation ************
    lib_obj.prototype.clipIt = function(t,r,b,l,step,fn,wh){
      tstep=Math.max(Math.max(Math.abs((t-this.ct)/step),Math.abs((r-this.cr)/step)),
        Math.max(Math.abs((b-this.cb)/step),Math.abs((l-this.cl)/step)))
      if(!this.clipactive){
        this.clipactive=true; if(!wh) wh=0; if(!fn) fn=0
        this.clip(t,r,b,l,(t-this.ct)/tstep,(r-this.cr)/tstep,
          (b-this.cb)/tstep,(l-this.cl)/tstep,tstep,0, fn,wh)
      }
    }
    lib_obj.prototype.clip = function(t,r,b,l,ts,rs,bs,ls,tstep,astep,fn,wh){
      if(astep<tstep){
        if(wh) eval(wh);
        astep++
        this.clipBy(ts,rs,bs,ls,1);
        setTimeout(this.obj+".clip("+t+","+r+","+b+","+l+","+ts+","+rs+","
          +bs+","+ls+","+tstep+","+astep+",'"+fn+"','"+wh+"')",50)
      }else{
        this.clipactive=false; this.clipTo(t,r,b,l,1);
        if(fn) eval(fn)
      }
    }

    //Slide animation ***********
    lib_obj.prototype.slideIt = function(endx,endy,inc,speed,fn,wh){
      if(!this.slideactive){
        var distx = endx - this.x;
        var disty = endy - this.y
        var num = Math.sqrt(Math.pow(distx,2)+Math.pow(disty,2))/inc
        var dx = distx/num; var dy = disty/num
        this.slideactive = 1;
        if(!wh) wh=0; if(!fn) fn=0
        this.slide(dx,dy,endx,endy,speed,fn,wh)
        }
    }
    lib_obj.prototype.slide = function(dx,dy,endx,endy,speed,fn,wh) {
      if(this.slideactive&&
      (Math.floor(Math.abs(dx))<Math.floor(Math.abs(endx-this.x))||
        Math.floor(Math.abs(dy))<Math.floor(Math.abs(endy-this.y)))){
        this.moveBy(dx,dy);
        if(wh) eval(wh)
        setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+speed+",'"
        +fn+"','"+wh+"')",speed)
      }else{
        this.slideactive = 0;
        this.moveIt(endx,endy);
        if(fn) eval(fn)
      }
    }

    //Circle animation ****************
    lib_obj.prototype.circleIt = function(rad,ainc,a,enda,xc,yc,speed,fn) {
      if((Math.abs(ainc)<Math.abs(enda-a))) {
        a += ainc
        var x = xc + rad*Math.cos(a*Math.PI/180)
        var y = yc - rad*Math.sin(a*Math.PI/180)
        this.moveIt(x,y)
        setTimeout(this.obj+".circleIt("+rad+","+ainc+","+a+","+enda+","
          +xc+","+yc+","+speed+",'"+fn+"')",speed)
      }else if(fn&&fn!="undefined") eval(fn)
    }

    //Document size object ********
    function lib_doc_size(){
      this.x=0;this.x2=bw.ie && document.body.offsetWidth-20||innerWidth||0;
      this.y=0;this.y2=bw.ie && document.body.offsetHeight-5||innerHeight||0;
      if(!this.x2||!this.y2) return message('Document has no width or height')
      this.x50=this.x2/2;this.y50=this.y2/2;
      return this;
    }

    //Drag drop functions start *******************
    dd_is_active=0; dd_obj=0; dd_mobj=0
    function lib_dd(){
      dd_is_active=1
      if(bw.ns4){
        document.captureEvents(Event.MOUSEMOVE|Event.MOUSEDOWN|Event.MOUSEUP)
      }
      document.onmousemove=lib_dd_move;
      document.onmousedown=lib_dd_down
      document.onmouseup=lib_dd_up
    }
    lib_obj.prototype.dragdrop = function(obj){
      if(!dd_is_active) lib_dd()
      this.evnt.onmouseover=new Function("lib_dd_over("+this.obj+")")
      this.evnt.onmouseout=new Function("dd_mobj=0")
      if(obj) this.ddobj=obj
    }
    lib_obj.prototype.nodragdrop = function(){
      this.evnt.onmouseover=""; this.evnt.onmouseout=""
      dd_obj=0; dd_mobj=0
    }
    //Drag drop event functions
    function lib_dd_over(obj){dd_mobj=obj}
    function lib_dd_up(e){dd_obj=0}

    var MouseX = 0;
    var MouseY = 0;

    function lib_dd_down(e){ //Mousedown

    if(dd_mobj){
        x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
        y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
        dd_obj=dd_mobj
        dd_obj.clX=x-dd_obj.x
        dd_obj.clY=y-dd_obj.y
        }

    }
    function lib_dd_move(e,y,rresize){ //Mousemove
      x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
      y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
      if(dd_obj){
        nx=x-dd_obj.clX; ny=y-dd_obj.clY
        if(dd_obj.ddobj) dd_obj.ddobj.moveIt(nx,ny)
        else dd_obj.moveIt(nx,ny)
      }
      if(!bw.ns4) return false
    }
    //Drag drop functions end *************

    // page functions
    function resetClip(){
      newleft = (screen.width - <?php echo $imgObj->width?>)/2;
      if (newleft<0)newleft = 0;
      objimg.moveIt(newleft,100);
      objimg.clipTo(0,<?php echo $imgObj->width?>,<?php echo $imgObj->height?>,0,1);
      objlefttop.moveIt(newleft-2,97);
      objrightbottom.moveIt(newleft+<?php echo $imgObj->width?>-23,100+<?php echo $imgObj->height?>-23);
      document.mainform.clipval.value = "";
      }
    function libinit(){
      page=new lib_doc_size();

      objlefttop=new lib_obj('lefttopdiv');
      objlefttop.dragdrop();

      objrightbottom=new lib_obj('rightbottomdiv');
      objrightbottom.dragdrop();

      objimg=new lib_obj('imgdiv');

      resetClip();
      }

    function showPreview(){
    if (objlefttop.y < objimg.y+2 ){
            objlefttop.y = objimg.y+2 ;
        objlefttop.moveIt(objlefttop.x, objimg.y);
    }
    if (objlefttop.x < objimg.x ){
            objlefttop.x = objimg.x ;
        objlefttop.moveIt(objimg.x, objlefttop.y );
    }

    objimg.clipTo(objlefttop.y-objimg.y+2, objrightbottom.x-objimg.x+23 , objrightbottom.y-objimg.y+23, objlefttop.x-objimg.x+2,1);
    document.mainform.clipval.value = objimg.ct + ',' + objimg.cr + ',' + objimg.cb + ',' + objimg.cl;
    }

    function showCorners(check){
    if (check.checked){
        objlefttop.showIt();
        objrightbottom.showIt();
       }else{
        objlefttop.hideIt();
        objrightbottom.hideIt();
        resetClip();
       }
    }

    </script>
<?php }?>
    <style>
    #lefttopdiv{
    position:absolute;
    background-image:url(<?php echo $PHP_SELF?>?img=left);
    left:0px;
    top:100px;
    height:25px;
    width:25px;
    z-index:8;
    cursor:move;
    visibility:hidden;
    }
    #rightbottomdiv{
    position:absolute;
    background-image:url(<?php echo $PHP_SELF?>?img=right);
    left:0px;
    top:225px;
    height:25px;
    width:25px;
    z-index:9;
    cursor:move;
    visibility:hidden;
    }
    #imgdiv{
    position:absolute;
    top:100px;
    width:<?php echo $imgObj->width?>px;
    height:<?php echo $imgObj->height?>px;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    z-index:0;
    <?php if (!$imgObj->imgRes) print "visibility:hidden;\n";?>
    }
    </style>
    <link rel="stylesheet" href="themes/<?php echo $CONFIG['theme'];?>/style.css" />
</head>

<body <?php if ($imgObj) print "onload=\"libinit()\"";?>>

<form name="mainform" method="POST" enctype="multipart/form-data" action="picEditor.php">

<input type="hidden" name="clipval" value="">
<input type="hidden" name="newimage" value="<?php print $newimage ; ?>">
<input type="hidden" name="img_dir" value="<?php print $img_dir ; ?>">
<input type="hidden" name="id" value="<?php print (isset($_GET['id']))?$_GET['id']:$_POST['id']; ?>">

<? starttable("100%", $lang_editpics_php['crop_title'], 3); ?>
<tr>
<td>
<table border="0" cellspacing="2" cellpadding="2" class="maintableb" width="100%" >
  <tr>
<?php if ($CONFIG['thumb_method']='im' ||($CONFIG['thumb_method']='gd2' && function_exists("imagerotate"))){ ?>


   <td>
      <select name="angle" class="listbox">
      <option value="0" selected>Rotate
      <option value="90">-90&#176;
      <option value="180">180&#176;
      <option value="270">+90&#176;
      </select>
   </td>
   <!--
   <td >
    <input valign="bottom" type="checkbox" class="checkbox" name="mirror" value="true">
      Mirror
    </td>


<?php } ?>

   <td>
       <select name="rescale" class="listbox">
       <option value="">Scale
       <option value="0.1">10%<option value="0.11">11%<option value="0.12">12%<option value="0.13">13%<option value="0.14">14%<option value="0.15">15%<option value="0.16">16%<option value="0.17">17%<option value="0.18">18%<option value="0.19">19%<option value="0.2">20%<option value="0.21">21%<option value="0.22">22%<option value="0.23">23%<option value="0.24">24%<option value="0.25">25%<option value="0.26">26%<option value="0.27">27%<option value="0.28">28%<option value="0.29">29%<option value="0.3">30%<option value="0.31">31%<option value="0.32">32%<option value="0.33">33%<option value="0.34">34%<option value="0.35">35%<option value="0.36">36%<option value="0.37">37%<option value="0.38">38%<option value="0.39">39%<option value="0.4">40%<option value="0.41">41%<option value="0.42">42%<option value="0.43">43%<option value="0.44">44%<option value="0.45">45%<option value="0.46">46%<option value="0.47">47%<option value="0.48">48%<option value="0.49">49%<option value="0.5">50%<option value="0.51">51%<option value="0.52">52%<option value="0.53">53%<option value="0.54">54%<option value="0.55">55%<option value="0.56">56%<option value="0.57">57%<option value="0.58">58%<option value="0.59">59%<option value="0.6">60%<option value="0.61">61%<option value="0.62">62%<option value="0.63">63%<option value="0.64">64%<option value="0.65">65%<option value="0.66">66%<option value="0.67">67%<option value="0.68">68%<option value="0.69">69%<option value="0.7">70%<option value="0.71">71%<option value="0.72">72%<option value="0.73">73%<option value="0.74">74%<option value="0.75">75%<option value="0.76">76%<option value="0.77">77%<option value="0.78">78%<option value="0.79">79%<option value="0.8">80%<option value="0.81">81%<option value="0.82">82%<option value="0.83">83%<option value="0.84">84%<option value="0.85">85%<option value="0.86">86%<option value="0.87">87%<option value="0.88">88%<option value="0.89">89%<option value="0.9">90%<option value="0.91">91%<option value="0.92">92%<option value="0.93">93%<option value="0.94">94%<option value="0.95">95%<option value="0.96">96%<option value="0.97">97%<option value="0.98">98%<option value="0.99">99%<option value="1">100%<option value="1.01">101%<option value="1.02">102%<option value="1.03">103%<option value="1.04">104%<option value="1.05">105%<option value="1.06">106%<option value="1.07">107%<option value="1.08">108%<option value="1.09">109%<option value="1.1">110%<option value="1.11">111%<option value="1.12">112%<option value="1.13">113%<option value="1.14">114%<option value="1.15">115%<option value="1.16">116%<option value="1.17">117%<option value="1.18">118%<option value="1.19">119%<option value="1.2">120%<option value="1.21">121%<option value="1.22">122%<option value="1.23">123%<option value="1.24">124%<option value="1.25">125%<option value="1.26">126%<option value="1.27">127%<option value="1.28">128%<option value="1.29">129%<option value="1.3">130%<option value="1.31">131%<option value="1.32">132%<option value="1.33">133%<option value="1.34">134%<option value="1.35">135%<option value="1.36">136%<option value="1.37">137%<option value="1.38">138%<option value="1.39">139%<option value="1.4">140%<option value="1.41">141%<option value="1.42">142%<option value="1.43">143%<option value="1.44">144%<option value="1.45">145%<option value="1.46">146%<option value="1.47">147%<option value="1.48">148%<option value="1.49">149%<option value="1.5">150%<option value="1.51">151%<option value="1.52">152%<option value="1.53">153%<option value="1.54">154%<option value="1.55">155%<option value="1.56">156%<option value="1.57">157%<option value="1.58">158%<option value="1.59">159%<option value="1.6">160%<option value="1.61">161%<option value="1.62">162%<option value="1.63">163%<option value="1.64">164%<option value="1.65">165%<option value="1.66">166%<option value="1.67">167%<option value="1.68">168%<option value="1.69">169%<option value="1.7">170%<option value="1.71">171%<option value="1.72">172%<option value="1.73">173%<option value="1.74">174%<option value="1.75">175%<option value="1.76">176%<option value="1.77">177%<option value="1.78">178%<option value="1.79">179%<option value="1.8">180%<option value="1.81">181%<option value="1.82">182%<option value="1.83">183%<option value="1.84">184%<option value="1.85">185%<option value="1.86">186%<option value="1.87">187%<option value="1.88">188%<option value="1.89">189%<option value="1.9">190%<option value="1.91">191%<option value="1.92">192%<option value="1.93">193%<option value="1.94">194%<option value="1.95">195%<option value="1.96">196%<option value="1.97">197%<option value="1.98">198%<option value="1.99">199%<option value="2">200%</option>
       </select>
   </td>
   <td>
     OR
   </td>
   <td>
       <select name="widthheight" class="listbox" >
       <option value="width">New width
       <option value="height">New height
       </option>
       </select>
   </td>
   <td>
       <input type="text" size="3" name="newsize" class="textinput"> px
   </td>
   -->



   <td>
     <input type="checkbox" class="checkbox" name="cropping" value="true" onclick="showCorners(this)">
     Enable clipping, apply to crop
   </td>
   <td title="Less quality creates a smaller file, default is 80%" >
        <select id="quality" name="quality" class="listbox" >
        <option value="80" selected>JPEG Output Quality
        <option value="10">10<option value="11">11<option value="12">12<option value="13">13<option value="14">14<option value="15">15<option value="16">16<option value="17">17<option value="18">18<option value="19">19<option value="20">20<option value="21">21<option value="22">22<option value="23">23<option value="24">24<option value="25">25<option value="26">26<option value="27">27<option value="28">28<option value="29">29<option value="30">30<option value="31">31<option value="32">32<option value="33">33<option value="34">34<option value="35">35<option value="36">36<option value="37">37<option value="38">38<option value="39">39<option value="40">40<option value="41">41<option value="42">42<option value="43">43<option value="44">44<option value="45">45<option value="46">46<option value="47">47<option value="48">48<option value="49">49<option value="50">50<option value="51">51<option value="52">52<option value="53">53<option value="54">54<option value="55">55<option value="56">56<option value="57">57<option value="58">58<option value="59">59<option value="60">60<option value="61">61<option value="62">62<option value="63">63<option value="64">64<option value="65">65<option value="66">66<option value="67">67<option value="68">68<option value="69">69<option value="70">70<option value="71">71<option value="72">72<option value="73">73<option value="74">74<option value="75">75<option value="76">76<option value="77">77<option value="78">78<option value="79">79<option value="80">80<option value="81">81<option value="82">82<option value="83">83<option value="84">84<option value="85">85<option value="86">86<option value="87">87<option value="88">88<option value="89">89<option value="90">90<option value="91">91<option value="92">92<option value="93">93<option value="94">94<option value="95">95<option value="96">96<option value="97">97<option value="98">98<option value="99">99<option value="100">100</option>

        </select>
   </td>
   <td><input type="submit" name="submit" class="button" value=" <?php echo $lang_editpics_php['preview'] ?> "></td>
   <td><input type="submit" name="save" class="button" value=" <?php echo $lang_editpics_php['save'] ?> "></td>
   <td><input type="submit" name="save_thumb" class="button" value=" <?php echo $lang_editpics_php['save_thumb'] ?> "></td>
 </tr>
</table>
</td>
</tr>
<?php endtable(); ?>

<div id="lefttopdiv" onclick="showPreview(); return false;">
</div>

<div id="rightbottomdiv" onclick="showPreview(); return false;">
</div>

<?php if ($message){ ?>
<h1 align=center><?php echo $message?></h1>
<?php } ?>

<div id="imgdiv">
<?php if ($imgObj){ ?>
<IMG src="<?php echo $imgObj->directory.$imgObj->filename?>?<?php echo rand(); ?>" <?php echo $imgObj->string; ?> align="absmiddle">
<?php } ?>
</div>

</body>
</html>