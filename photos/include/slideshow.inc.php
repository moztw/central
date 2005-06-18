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
  $Source: /cvsroot/coppermine/stable/include/slideshow.inc.php,v $
  $Revision: 1.9 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/
?>

<script language="JavaScript" type="text/JavaScript">
// (C) 2000 www.CodeLifter.com
// http://www.codelifter.com
// Free for all users, but leave in this  header
// NS4-6,IE4-6
// Fade effect only in IE; degrades gracefully

// $Id: slideshow.inc.php,v 1.9 2005/04/19 03:17:11 gaugau Exp $

// Set slideShowSpeed (milliseconds)
var slideShowSpeed = <?php echo (int)$HTTP_GET_VARS['slideshow'] ?>

// Agent sniffer shamelessly 'stolen' from the excellent X library from cross-browser.com
var xOp7=false,xOp5or6=false,xIE4Up=false,xNN4=false,xUA=navigator.userAgent.toLowerCase();
if(window.opera){
  xOp7=(xUA.indexOf('opera 7')!=-1 || xUA.indexOf('opera/7')!=-1);
  if (!xOp7) xOp5or6=(xUA.indexOf('opera 5')!=-1 || xUA.indexOf('opera/5')!=-1 || xUA.indexOf('opera 6')!=-1 || xUA.indexOf('opera/6')!=-1);
}
else if(document.layers) xNN4=true;
else {xIE4Up=document.all && xUA.indexOf('msie')!=-1 && parseInt(navigator.appVersion)>=4;}

// Duration of crossfade (seconds)
var crossFadeDuration = 3

// Specify the image files
var Pic = new Array() // don't touch this
// to add more images, just continue
// the pattern, adding to the array below
<?php
$i = 0;
$j = 0;
$pid = (int)$HTTP_GET_VARS['pid'];
$start_img = '';
$pic_data = get_pic_data($HTTP_GET_VARS['album'], $pic_count, $album_name, -1, -1, false);
foreach ($pic_data as $picture) {

    if($CONFIG['thumb_use']=='ht' && $picture['pheight'] > $CONFIG['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($CONFIG['thumb_use']=='wd' && $picture['pwidth'] > $CONFIG['picture_width']){
      $condition = true;
    }elseif($CONFIG['thumb_use']=='any' && max($picture['pwidth'], $picture['pheight']) > $CONFIG['picture_width']){
      $condition = true;
    }else{
     $condition = false;
    }

    if (is_image($picture['filename'])) {
        if ($CONFIG['make_intermediate'] && $condition ) {
            $picture_url = get_pic_url($picture, 'normal');
        } else {
            $picture_url = get_pic_url($picture, 'fullsize');
        }

        echo "Pic[$i] = '" . $picture_url . "'\n";
        if ($picture['pid'] == $pid) {
            $j = $i;
            $start_img = $picture_url;
        }
        $i++;
    }
}
if (!$i) {
    echo "Pic[0] = 'images/thumb_document.jpg'\n";
}
?>

var t
var j = <?php echo "$j\n" ?>
var p = Pic.length
var pos = j

var preLoad = new Array()

function preLoadPic(index)
{
        if (Pic[index] != ''){
                window.status='Loading : '+Pic[index]
                preLoad[index] = new Image()
                preLoad[index].src = Pic[index]
                Pic[index] = ''
                window.status=''
        }
}

function runSlideShow(){
   if (xIE4Up){
            document.images.SlideShow.style.filter="blendTrans(duration=2)"
                document.images.SlideShow.style.filter= "blendTrans(duration=crossFadeDuration)"
      document.images.SlideShow.filters.blendTrans.Apply()
        }
        document.images.SlideShow.src = preLoad[j].src
        if (xIE4Up){
           document.images.SlideShow.filters.blendTrans.Play()
        }

        pos = j

        j = j + 1
        if (j > (p-1)) j=0
        t = setTimeout('runSlideShow()', slideShowSpeed)
        preLoadPic(j)
}

function endSlideShow(){
        self.document.location = 'displayimage.php?album=<?php echo isset($HTTP_GET_VARS['album']) ? $HTTP_GET_VARS['album'] : '';
echo isset($HTTP_GET_VARS['cat']) ? '&cat=' . $HTTP_GET_VARS['cat'] : '' ?>&pos='+pos
}

preLoadPic(j)

</script>