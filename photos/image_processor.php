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
// CVS version: $Id: image_processor.php,v 1.3 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

// To use this module, one must place a transitory directory in the primary
// CPG folder. Then one must change the form action of upload.php to this
// script instead of db_imput.

// Let all the libraries know that this program is part of Coppermine.
define('IN_COPPERMINE', true);

// Let the libraries know this is the image_processor_php file.
define('IMAGE_PROCESSOR_PHP', true);

//         Require include/init.inc.php, so we may have
// access to Coppermine's configuration information.

require('include/init.inc.php');

// Declare global variables.
global $CONFIG, $lang_image_processor_php;


//-----------------------------FUNCTION BLOCK---------------------------------

function rotate_image($path_to_primary_image, $degrees) {

// This function takes $path_to_primary_image and $degrees
//as arguments.  It returns nothing.

//Globalize appropriate variables.
global $CONFIG, $lang_image_processor_php;

//        The $method varaible should contain gd1, gd2,
// or im, which indicates GD Library v1, GD Library v2,
// and ImageMagick respectively. We will use a switch
// statement to control the program flow based on the
// value of the $method variable.

$method = $CONFIG['thumb_method'];

// Detect if user has the function imageistruecolor(). This function is
// available in GD2 in PHP 4.3.2 and up.  It allows GD to distinguish between
// palette images and true color images, which allows GD to make the appropriate
// canvas.

if (($method == 'gd2') and (!function_exists('imageistruecolor'))) {

        //Set ignore imageistruecolor to false.
        $ignore = 0;
} else {
        //Set $ignore imageistruecolor to true.
        $ignore = 1;
}

switch ($method) {

        case "im" :

                $real_path_to_primary_image = realpath($path_to_primary_image);

                $output = array();

                // Set IM path.
                $im_path = $CONFIG['impath'];

                //Check the IM path for the final slash.
                if (eregi('/$',$im_path) or empty($im_path)) {
                        $trailing_slash = "";
                    } else {
                        $trailing_slash = "/";
                    }

                //Select degree measure.

                if (($degrees == 90) or ($degrees == 180) or ($degrees == 270)) {

                        //Form the command to rotate the image.
                        $cmd = "{$CONFIG['impath']}".$trailing_slash."mogrify -quality \"100\" -rotate \"$degrees\" \"$real_path_to_primary_image\"";

                }

                exec ($cmd, $output, $retval);

                if ($retval) {
                        $ERROR = $lang_image_processor_php['IM_Error'] . $retval;
                        if ($CONFIG['debug_mode']) {
                                // Re-execute the command with the backtit operator in order to get all outputs
                                // will not work is safe mode is enabled
                                $output = `$cmd 2>&1`;
                                $ERROR .= "<br /><br /><div align=\"left\">{$lang_image_processor_php['cmd_line']}<br /><font size=\"2\">".nl2br(htmlspecialchars($cmd))."</font></div>";
                                $ERROR .= "<br /><br /><div align=\"left\">{$lang_image_processor_php['mog_said']}<br /><font size=\"2\">";
                                $ERROR .= nl2br(htmlspecialchars($output));
                                $ERROR .= "</font></div>";
                        }
                        die($ERROR);

                }

                break;

        case "gd2" :

                if ($ignore) {

                        $image_handle = get_handle($path_to_primary_image);
                        if (imageistruecolor($image_handle)) {
                                imagedestroy($image_handle);
                                true_color_rotate($path_to_primary_image, $degrees);
                        } else {
                                imagedestroy($image_handle);
                                palette_rotate($path_to_primary_image, $degrees);
                        }
                } else {
                        true_color_rotate($path_to_primary_image, $degrees);
                }

                break;

        case "gd1" :

                palette_rotate($path_to_primary_image, $degrees);

                break;

}

}

//*********************************************************************************************

function true_color_rotate($path_to_primary_image, $degrees) {

global $lang_image_processor_php;

// Get image info.
$source_image_size_and_type = getimagesize($path_to_primary_image) or die($lang_image_processor_php['file_corrupt']);
$source_image_width = $source_image_size_and_type[0];
$source_image_height = $source_image_size_and_type[1];
$source_image_type = $source_image_size_and_type[2];

//Set new canvas size.
if ( $source_image_width > $source_image_height ) {
    $new_maximum_dimension = $source_image_width;
} else {
    $new_maximum_dimension = $source_image_height;
}


$image_handle = get_handle($path_to_primary_image);

        if ($degrees == "90") {
                $destination_image_handle = ImageCreateTrueColor($new_maximum_dimension,$new_maximum_dimension);
                imagecopy($destination_image_handle,$image_handle,0,0,0,0,$source_image_width,$source_image_height);
                imagedestroy($image_handle);
                $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
                $final_image_handle = ImageCreateTrueColor($source_image_height,$source_image_width);

                // Determine orientation.

                if ($source_image_height > $source_image_width) {

                        $difference = $source_image_height-$source_image_width;
                        imagecopy($final_image_handle,$rotated_image_handle,0,0,0,$difference,$source_image_height,$source_image_width);

                } else {

                        imagecopy($final_image_handle,$rotated_image_handle,0,0,0,0,$source_image_height,$source_image_width);

                }

                imagedestroy($rotated_image_handle);

        } elseif ($degrees == "270") {

                $new_dimension = $source_image_width + $source_image_height;
                $destination_image_handle = ImageCreateTrueColor($new_dimension,$new_dimension);
                imagecopy($destination_image_handle,$image_handle,$source_image_height,$source_image_width,0,0,$source_image_width,$source_image_height);
                imagedestroy($image_handle);
                $final_image_handle = ImageCreateTrueColor($source_image_height,$source_image_width);
                $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
                imagecopy($final_image_handle,$rotated_image_handle,0,0,0,$source_image_height,$source_image_height,$source_image_width);
                imagedestroy($rotated_image_handle);

        } elseif ($degrees == "180") {

                $destination_image_handle = ImageCreateTrueColor(2*$source_image_width,$source_image_height);
                imagecopy($destination_image_handle,$image_handle,$source_image_width,0,0,0,$source_image_width,$source_image_height);
                imagedestroy($image_handle);
                $final_image_handle = ImageCreateTrueColor($source_image_width,$source_image_height);
                $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
                imagecopy($final_image_handle,$rotated_image_handle,0,0,0,0,$source_image_width,$source_image_height);
                imagedestroy($rotated_image_handle);

        }


// Now let's write the image to disk.

if ($source_image_type == "2") {

        imagejpeg($final_image_handle, $path_to_primary_image, 100) or die($lang_image_processor_php['no_write']);

} elseif ($source_image_type == "3") {

        imagepng($final_image_handle, $path_to_primary_image) or die($lang_image_processor_php['no_write']);

}

// Destroy the final image handle.

imagedestroy($final_image_handle);

}

//******************************************************************************************

function palette_rotate($path_to_primary_image, $degrees) {

global $lang_image_processor_php;

// Get image info.
$source_image_size_and_type = getimagesize($path_to_primary_image) or die($lang_image_processor_php['file_corrupt']);
$source_image_width = $source_image_size_and_type[0];
$source_image_height = $source_image_size_and_type[1];
$source_image_type = $source_image_size_and_type[2];

//Set new canvas size.
if ( $source_image_width > $source_image_height ) {
    $new_maximum_dimension = $source_image_width;
} else {
    $new_maximum_dimension = $source_image_height;
}

$image_handle = get_handle($path_to_primary_image);

if ($degrees == "90") {

        $destination_image_handle = ImageCreate($new_maximum_dimension,$new_maximum_dimension);
        imagecopy($destination_image_handle,$image_handle,0,0,0,0,$source_image_width,$source_image_height);
        imagedestroy($image_handle);
        $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
        $final_image_handle = ImageCreate($source_image_height,$source_image_width);

        // Determine orientation.

        if ($source_image_height > $source_image_width) {

                $difference = $source_image_height-$source_image_width;
                imagecopy($final_image_handle,$rotated_image_handle,0,0,0,$difference,$source_image_height,$source_image_width);

        } else {

                imagecopy($final_image_handle,$rotated_image_handle,0,0,0,0,$source_image_height,$source_image_width);

        }

        imagedestroy($rotated_image_handle);

} elseif ($degrees == "270") {

        $new_dimension = $source_image_width + $source_image_height;
        $destination_image_handle = ImageCreate($new_dimension,$new_dimension);
        imagecopy($destination_image_handle,$image_handle,$source_image_height,$source_image_width,0,0,$source_image_width,$source_image_height);
        imagedestroy($image_handle);
        $final_image_handle = ImageCreate($source_image_height,$source_image_width);
        $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
        imagecopy($final_image_handle,$rotated_image_handle,0,0,0,$source_image_height,$source_image_height,$source_image_width);
        imagedestroy($rotated_image_handle);


} elseif ($degrees == "180") {

        $destination_image_handle = ImageCreate(2*$source_image_width,$source_image_height);
        imagecopy($destination_image_handle,$image_handle,$source_image_width,0,0,0,$source_image_width,$source_image_height);
        imagedestroy($image_handle);
        $final_image_handle = ImageCreate($source_image_width,$source_image_height);
        $rotated_image_handle = imagerotate($destination_image_handle,$degrees,0);
        imagecopy($final_image_handle,$rotated_image_handle,0,0,0,0,$source_image_width,$source_image_height);
        imagedestroy($rotated_image_handle);

}

// Now let's write the image to disk.

if ($source_image_type == "2") {

        imagejpeg($final_image_handle, $path_to_primary_image, 100) or die($lang_image_processor_php['no_write']);

} elseif ($source_image_type == "3") {

        imagepng($final_image_handle, $path_to_primary_image) or die($lang_image_processor_php['no_write']);

}

// Destroy the final image handle.

imagedestroy($final_image_handle);


}

//**********************************************

function get_handle($path_to_primary_image) {

global $lang_image_processor_php;

// Let's use this information to create the handle with which to hold our lovely
// image. The variable $image_handle is the handle that points to the image's
// location in memory. Other handle creating functions are available (wireless
// bitmap, for example), but they are very rarely needed. You can learn about
// them at php.net in the function library. Look under image functions. If you
// desire, you could add these types to the following if-then-else statements.

$source_image_size_and_type = getimagesize ($path_to_primary_image) or die($lang_image_processor_php['file_corrupt']);
$source_image_width = $source_image_size_and_type[0];
$source_image_height = $source_image_size_and_type[1];
$source_image_type = $source_image_size_and_type[2];

if ($source_image_type == "1") {

        // The image is a GIF file, which we cannot use due to the Unisys patent.
        // The image can be read by GD, but GD cannot create it again. It is
        // possible to convert a GIF to PNG format using a command line call to
        // the appropriate program (i.e. GIF2PNG), but the installation of this
        // program on servers is by no means consistent. Therefore, we will
        // forgo GIF support. We will return an error.

        cpg_die(CRITICAL_ERROR, $lang_image_processor_php['GD_GIF_Warning'], __FILE__, __LINE__);

} elseif ($source_image_type == "2") {

        // The image is a JPG file, so we must use the function
        // imagecreatefromjpeg.

        $image_handle = imagecreatefromjpeg($path_to_primary_image);

} elseif ($source_image_type == "3") {

        // The image is a PNG file, so we must use the function
        // imagecreatefrompng.

        $image_handle = imagecreatefrompng($path_to_primary_image);

} else {

        // The user has given us an image we do not wish to work with. We return an
        // error.


cpg_die(CRITICAL_ERROR, $lang_image_processor_php['not_supported'], __FILE__, __LINE__);

}

return $image_handle;

}

//******************************************************

function image_preview($path_to_primary_image, $maximum_width) {

//Globalize appropriate variables.
global $CONFIG, $lang_image_processor_php, $preview_image_directory;

//Determine thumbnail method.
$method = $CONFIG['thumb_method'];

if (($method == 'gd2') and (!function_exists('imageistruecolor'))) {

        //Set ignore imageistruecolor to false.
        $ignore = 0;
} else {
        //Set $ignore image is true color to true.
        $ignore = 1;
}

// Get image info.
$source_image_size_and_type = getimagesize($path_to_primary_image) or die($lang_image_processor_php['file_corrupt']);
$source_image_width = $source_image_size_and_type[0];
$source_image_height = $source_image_size_and_type[1];
$source_image_type = $source_image_size_and_type[2];

//We need specify the path for the transitory file.

        // Create a prefix for easier human recognition.
        $prefix = "pre_";

        //Set the correct file extension.

        if ($source_image_type == '1') {
                $suffix = '.gif';
        } elseif ($source_image_type == '2') {
                $suffix = '.jpg';
        } elseif ($source_image_type == '3') {
                $suffix = '.png';
        }

        // Generate the unique name.

        do {
                $seed = substr(md5(microtime().getmypid()), 0, 8);
                $path_to_preview_image = $preview_image_directory . $prefix . $seed . $suffix;
            } while (file_exists($path_to_preview_image));

//Now we can upload the file.


// Calculate dimensions.

if ($source_image_width > $maximum_width) {

        $new_width = (INTEGER) $maximum_width;
        $new_height = (INTEGER) ($source_image_height * ($maximum_width / $source_image_width));

} else {

        $new_width  = $source_image_width;
        $new_height = $source_image_height;

}


//Begin processing if GD is used.

if ($method == "gd2" or $method =="gd1") {

// Get image handle
$image_handle = get_handle($path_to_primary_image);

// Create the destination image handle.

if ($method == "gd2") {

        if ($ignore) {
                if (ImageIsTrueColor($image_handle)) {

                        $destination_image_handle = ImageCreateTrueColor($new_width, $new_height);

                } else {

                        $destination_image_handle = ImageCreate($new_width, $new_height);

                }
        } else {

                $destination_image_handle = ImageCreate($new_width, $new_height);

        }


} elseif ($method == "gd1") {

        $destination_image_handle = ImageCreate($new_width, $new_height);

}

// Resize the image

if ($method == "gd2") {

        //Use the higher quality function imagecopyresampled.
        imagecopyresampled($destination_image_handle, $image_handle, 0, 0, 0, 0, $new_width, $new_height, $source_image_width, $source_image_height);

} elseif ($method == "gd1") {

        //Use the lower quality imagecopyresized.
        imagecopyresized($destination_image_handle, $image_handle, 0, 0, 0, 0, $new_width, $new_height, $source_image_width, $source_image_height);

}

//Destroy $image_handle
imagedestroy($image_handle);

// Write the image to disk.

        if ($source_image_type == "2") {

                imagejpeg($destination_image_handle, $path_to_preview_image) or die($lang_image_processor_php['no_write']);

        } elseif ($source_image_type == "3") {

                imagepng($destination_image_handle, $path_to_preview_image) or die($lang_image_processor_php['no_write']);

        }

// Destroy $destination_image_handle.
imagedestroy($destination_image_handle);

} elseif ($method == "im") {

        // Set IM path.
        $im_path = $CONFIG['impath'];

        //Check the IM path for the final slash.
        if (eregi('/$',$im_path) or empty($im_path)) {
                $trailing_slash = "";
            } else {
                $trailing_slash = "/";
            }

        //Determine real paths to files.
        $real_path_to_primary_image = realpath($path_to_primary_image);
        $real_path_to_preview_image = realpath($path_to_preview_image);

        // Prevent the user from creating a process zombie by aborting while IM does its work.
        ignore_user_abort(true);

        // Issue the command for resizing to IM.  Have ImageMagick write the image to disk.

        $output = array();

        $cmd = "{$CONFIG['impath']}".$trailing_slash."convert -geometry {$new_width}x{$new_height} \"$real_path_to_primary_image\" \"$real_path_to_preview_image\"";

        exec ($cmd, $output, $retval);

        // Restore the user abort setting.
        ignore_user_abort(false);

        if ($retval) {
                $ERROR = $lang_image_processor_php['IM_Error'] . $retval;
                if ($CONFIG['debug_mode']) {
                        // Re-execute the command with the backtit operator in order to get all outputs
                        // will not work is safe mode is enabled
                        $output = `$cmd 2>&1`;
                        $ERROR .= "<br /><br /><div align=\"left\">{$lang_image_processor_php['cmd_line']}<br /><font size=\"2\">".nl2br(htmlspecialchars($cmd))."</font></div>";
                        $ERROR .= "<br /><br /><div align=\"left\">{$lang_image_processor_php['mog_said']}<br /><font size=\"2\">";
                        $ERROR .= nl2br(htmlspecialchars($output));
                        $ERROR .= "</font></div>";
                }
                die($ERROR);

        }

}

return $path_to_preview_image;

}

//**************************************************************************

function spring_cleaning($directory_path) {

global $lang_image_processor_php;

//First we get the transitory directory handle.
$directory_handle = opendir($directory_path) or die($lang_image_processor_php['no_open_trans_dir']);

// Now let's read through the directory contents.
while (!(($file = readdir($directory_handle)) === false)) {

        $dir_path = "".$directory_path."/".$file."";

        if (is_dir($dir_path)) {

                // This is a directory, so we move on.
                continue;

        }

        // We find out when the file was last accessed.
        $access_time = fileatime($dir_path);

        // We find out the current time.
        $current_time = time();

        // We calculate the the delete time. We will delete anything one hour old or older.
        $delete_time = $current_time - 3600;

        // Now we compare the two.
        if ($access_time <= $delete_time) {

                // The file is old. We delete it.
                unlink($dir_path);
        }

}

// Don't forget to close the directory.
closedir($directory_handle);

}

//**********************************************************************************

function make_form($next_form_action, $path_to_preview_image, $path_to_primary_image, $file_name) {

global $event;
global $album;
global $title;
global $caption;
global $keywords;
global $user1;
global $user2;
global $user3;
global $user4;
global $lang_image_processor_php;

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0

pageheader($lang_image_processor_php['page_title']);

print "<br><br><br>";

print "<center>";

print "<img src=\"$path_to_preview_image\" alt=\"{$lang_image_processor_php['preview_image_alt_text']}\">";

print "</center>";

print "<br>";
print "<br>";
print "<form action=\"$next_form_action\" method=\"post\">";
print "<input type=\"hidden\" name=\"album\" value=\"$album\">";
print "<input type=\"hidden\" name=\"title\" value=\"$title\">";
print "<input type=\"hidden\" name=\"caption\" value=\"$caption\">";
print "<input type=\"hidden\" name=\"keywords\" value=\"$keywords\">";
print "<input type=\"hidden\" name=\"user1\" value=\"$user1\">";
print "<input type=\"hidden\" name=\"user2\" value=\"$user2\">";
print "<input type=\"hidden\" name=\"user3\" value=\"$user3\">";
print "<input type=\"hidden\" name=\"user4\" value=\"$user4\">";
print "<input type=\"hidden\" name=\"event\" value=\"$event\">";
print "<input type=\"hidden\" name=\"file_name\" value=\"$file_name\">";
print "<input type=\"hidden\" name=\"transitory_image_path\" value=\"$path_to_primary_image\">";
print "<input type=\"hidden\" name=\"preview_image_path\" value=\"$path_to_preview_image\">";

print "<p>{$lang_image_processor_php['manipulation_query']}</p>";

print "<br>";
print "<input type=\"radio\" name=\"degrees\" value=\"no\" checked>{$lang_image_processor_php['no_manipulation']}&nbsp;&nbsp;&nbsp;&nbsp;";
print "<input type=\"radio\" name=\"degrees\" value=\"90\">90&#176;&nbsp;&nbsp;&nbsp;&nbsp;";
print "<input type=\"radio\" name=\"degrees\" value=\"180\">180&#176;&nbsp;&nbsp;&nbsp;&nbsp;";
print "<input type=\"radio\" name=\"degrees\" value=\"270\">270&#176;&nbsp;&nbsp;&nbsp;&nbsp;";
print "<br><br>";
print "<input type=\"submit\" value=\"Continue\">";
print "</form>";

pagefooter();

}

//------------------------------MAIN CODE BLOCK---------------------------

// Check to see if the uploader has permission to upload. close the script if he doesn't.

if (!USER_CAN_UPLOAD_PICTURES) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

// Let us define the directories where images will be temporarily stored.

$transitory_file_directory = "./albums/manipulation/transitory/";
$preview_image_directory = "./albums/manipulation/transitory/previews/";

// We can also create a rudimentary language array to make integration into CPG easier at a later date.
$lang_image_processor_php = array('finished_manipulation'=>'You have finished manipulating the image. Please click the Proceed button to finish uploading the image.',
                                  'finished_manipulation_button'=>'Proceed',
                                  'page_title'=>'Image Manipulation',
                                  'preview_image_alt_text'=>'Thumbnail preview of image.',
                                  'manipulation_query'=>'This is how the image you selected for upload currently appears. Do you wish to rotate the image? All rotations are counterclockwise. Please note, your image has not been uploaded yet.',
                                  'no_manipulation'=>'No',
                                  'IM_Error'=>'Error executing ImageMagick - Return value: ',
                                  'cmd_line'=>'Command Line :',
                                  'mog_said'=>'The mogrify program said:',
                                  'file_corrupt'=>'The file is corrupt or not accessible.',
                                  'no_write'=>'Could not write image to disk.',
                                  'GD_GIF_Warning'=>'The image you submitted is in GIF format. Unfortunately, GIF images use the Unisys patented LZW compression scheme, so this program cannot work with them. Please convert your image to PNG or JPG. Then try uploading it again.',
                                  'not_supported'=>'The uploaded image type is not supported. Please upload JPG or PNG images.',
                                  'no_open_trans_dir'=>'Could not open transitory directory.',
                                  'no_move'=>'Couldn\'t copy',
                                  'bad_angle'=>'The angle submitted is unacceptable. Please try again.',
                                  'tampering' =>'The preview image is missing or its path has been altered.',
                                  'primary_tampering' => 'The primary image path is not valid, or the file does not exist.',
                                  'err_invalid_fext' => 'Your file extension is not valid.'

);

// Let's inspect the directories for old files, and delete them if they are too old.
// Old files might appear if a user upload was interrupted.

spring_cleaning($transitory_file_directory);

spring_cleaning($preview_image_directory);

// The directories have been tidied.


// We also need to set the preview thumbnail width.
$maximum_width = $CONFIG['thumb_width'];

// First, we test for the variable $degrees to determine script action.

if (!isset($HTTP_POST_VARS['degrees'])) {

        // Display initial form.

        // First, we must capture all the data sent to us by upload.php.

        $event    = $HTTP_POST_VARS['event'];
        $album    = (int)$HTTP_POST_VARS['album'];
        $title    = $HTTP_POST_VARS['title'];
        $caption  = $HTTP_POST_VARS['caption'];
        $keywords = $HTTP_POST_VARS['keywords'];
        $user1    = $HTTP_POST_VARS['user1'];
        $user2    = $HTTP_POST_VARS['user2'];
        $user3    = $HTTP_POST_VARS['user3'];
        $user4    = $HTTP_POST_VARS['user4'];

        // First things first. Let's analyze the image file.

        // We already have the file size in bytes and  the temporary name in the file
        // upload global array.

        // The file size is $HTTP_POST_FILES['userpicture']['size'].

        $file_size = $HTTP_POST_FILES['userpicture']['size'];

        // The temporary name is $HTTP_POST_FILES['userpicture']['tmp_name'].

        $temporary_name = $HTTP_POST_FILES['userpicture']['tmp_name'];

        // The file name is $HTTP_POST_FILES['userpicture']['name'].

        $file_name = $HTTP_POST_FILES['userpicture']['name'];

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // We must check the file name for security reasons.

        // Replace forbidden chars with underscores
        $matches = array();
        $forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));

        // Check that the file uploaded has a valid extension
        if (get_magic_quotes_gpc()) $file_name = stripslashes($file_name);
        $picture_name = strtr($file_name, $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));
        if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)){
                $matches[1] = 'invalid_fname';
                $matches[2] = 'xxx';
        }
        if ($matches[2]=='' || !stristr($CONFIG['allowed_file_extensions'], $matches[2])) {
            cpg_die(ERROR, $lang_image_processor_php['err_invalid_fext'], __FILE__, __LINE__);
        }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // Now for some validation.
        // We check the file size of the user's file to end the program if it has no data.
        // We also check the temporary name to make sure it uploaded properly.

        if (($file_size <= 0) or ($temporary_name == '')) {

                // The user has submitted a corrupted file, a file without data, or the
                // upload failed. We return an error.

                cpg_die(ERROR, $lang_errors['invalid_image'], __FILE__, __LINE__);
        }

        // Now we can extract other information into the array $source_image_size_and_type.
        // getimagesize returns an array with 4 elements. Index 0 contains the width of
        // the image in pixels. Index 1 contains the height. Index 2 is a flag indicating
        // the type of the image: 1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP,
        // 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 9 = JPC, 10 = JP2,
        // 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM. Index 3 is a
        // string for use in HTML img tags. The funtion returns FALSE if it totally fails,
        // so we may use a die statement to generate the error message.

        $source_image_size_and_type = getimagesize($temporary_name) or die($lang_image_processor_php['file_corrupt']);
        $source_image_width = $source_image_size_and_type[0];
        $source_image_height = $source_image_size_and_type[1];
        $source_image_type = $source_image_size_and_type[2];

        // getimagesize returns a width or height of zero if there is no image in the file
        // or if it cannot tell what it is looking at.  Let's check the width and height.

        if (($source_image_width <= 0) or ($source_image_height <= 0)) {

                // The image supplied is either not an image or is not usable. We return
                // an error.

                cpg_die(ERROR, $lang_errors['invalid_image'], __FILE__, __LINE__);
        }

        // Now that we are pretty sure this image is legitimate, we need to move it into
        // the transitory directory, so that we may continue to work with it.

        //We need specify the path for the transitory file.

                // Create a prefix for easier human recognition.
                $prefix = "trans_";

                //Set the correct file extension.

                if ($source_image_type == '1') {
                        $suffix = '.gif';
                } elseif ($source_image_type == '2') {
                        $suffix = '.jpg';
                } elseif ($source_image_type == '3') {
                        $suffix = '.png';
                }

                // Generate the unique name.

                do {
                        $seed = substr(md5(microtime().getmypid()), 0, 8);
                        $path_to_primary_image = $transitory_file_directory . $prefix . $seed . $suffix;
                    } while (file_exists($path_to_primary_image));

        //Now we can upload the file.

        if (is_uploaded_file($temporary_name)) {
                        move_uploaded_file($temporary_name, $path_to_primary_image) or die ($lang_image_processor_php['no_move']);
                }

        // The file has been uploaded to the transitory directory. At this point, we
        // are ready to create the form that will allow the user to rotate the image.
        // It requires a preview thumbnail to be loaded. We will create the thumbnail
        // with the image preview function, which will return the file path.

        $path_to_preview_image = image_preview($path_to_primary_image, $maximum_width);

        // Our preview thumbnail is now stored on the server. Let's create the
        // rotation form.

        make_form($_SERVER[PHP_SELF], $path_to_preview_image, $path_to_primary_image, $file_name);

} else {

        //Display secondary form.

        // First, we must capture all the data sent to us by the initial form.

        $degrees  = $HTTP_POST_VARS['degrees'];
        $event    = $HTTP_POST_VARS['event'];
        $path_to_primary_image = $HTTP_POST_VARS['transitory_image_path'];
        $path_to_preview_image = $HTTP_POST_VARS['preview_image_path'];
        $transitory_file_name = $HTTP_POST_VARS['file_name'];
        $album    = (int)$HTTP_POST_VARS['album'];
        $title    = $HTTP_POST_VARS['title'];
        $caption  = $HTTP_POST_VARS['caption'];
        $keywords = $HTTP_POST_VARS['keywords'];
        $user1    = $HTTP_POST_VARS['user1'];
        $user2    = $HTTP_POST_VARS['user2'];
        $user3    = $HTTP_POST_VARS['user3'];
        $user4    = $HTTP_POST_VARS['user4'];

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // We must check the file name for security reasons.

        // Replace forbidden chars with underscores
        $matches = array();
        $forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));

        // Check that the file uploaded has a valid extension
        if (get_magic_quotes_gpc()) $transitory_file_name = stripslashes($transitory_file_name);
        $picture_name = strtr($transitory_file_name, $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));
        if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)){
                $matches[1] = 'invalid_fname';
                $matches[2] = 'xxx';
        }
        if ($matches[2]=='' || !stristr($CONFIG['allowed_file_extensions'], $matches[2])) {
            cpg_die(ERROR, $lang_image_processor_php['err_invalid_fext'], __FILE__, __LINE__);
        }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        // Now let us delete the old preview image. First, we must verify the image path and preview path
        // have not been altered too severely.

        //Create the search strings.

        $preview_search_string = "^".$preview_image_directory."";
        $primary_search_string = "^".$transitory_file_directory."";

        //Check the preview image path and delete if it passes the test.

        if ((ereg($preview_search_string, $path_to_preview_image)) and (file_exists($path_to_preview_image))) {

                // It is safe to delete the preview image.
                unlink($path_to_preview_image);

        } else {

                // The supplied preview path is invalid. The image is either missing, or someone has tampered with the HTML request.
                cpg_die(ERROR, $lang_image_processor_php['tampering'], __FILE__, __LINE__);

        }

        //Check the primary image path.

        if ((!(ereg($primary_search_string, $path_to_primary_image))) or (!(file_exists($path_to_primary_image)))) {

                // The primary image path is not valid, or the file does not exist.
                cpg_die(ERROR, $lang_image_processor_php['primary_tampering'], __FILE__, __LINE__);

        }


        // In this instance, $degrees will tell us everything we wish to know about what
        // to do next. Let's validate it.

        // We will only accept four values: 90, 180, 270, and no. Let's check
        // the user input:

        if (!(($degrees == "90") or ($degrees == "180") or ($degrees == "270") or ($degrees == "no"))) {

                //The user is submitting incorrect values. We generate an error.

                cpg_die(CRITICAL_ERROR, $lang_image_processor_php['bad_angle'], __FILE__, __LINE__);

        }

        // Now that we have validated, let's analyze what we have.

        if ($degrees == "no") {

                // The user has finished modifiying the image.

                // We create a hidden form that thanks the user, and passes
                // the information to db_input.

                header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
                header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
                header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
                header("Cache-Control: post-check=0, pre-check=0", false);
                header("Pragma: no-cache"); // HTTP/1.0

                pageheader($lang_image_processor_php['page_title']);

                print "<br><br><br>";

                print "<form action=\"db_input.php\" method=\"post\">";
                print "<input type=\"hidden\" name=\"album\" value=\"$album\">";
                print "<input type=\"hidden\" name=\"title\" value=\"$title\">";
                print "<input type=\"hidden\" name=\"caption\" value=\"$caption\">";
                print "<input type=\"hidden\" name=\"keywords\" value=\"$keywords\">";
                print "<input type=\"hidden\" name=\"user1\" value=\"$user1\">";
                print "<input type=\"hidden\" name=\"user2\" value=\"$user2\">";
                print "<input type=\"hidden\" name=\"user3\" value=\"$user3\">";
                print "<input type=\"hidden\" name=\"user4\" value=\"$user4\">";
                print "<input type=\"hidden\" name=\"event\" value=\"$event\">";
                print "<input type=\"hidden\" name=\"transitory_image_path\" value=\"$path_to_primary_image\">";
                print "<input type=\"hidden\" name=\"file_name\" value=\"$transitory_file_name\">";

                print "<p>{$lang_image_processor_php['finished_manipulation']}</p>";

                print "<br>";

                print "<input type=\"submit\" value=\"{$lang_image_processor_php['finished_manipulation_button']}\">";
                print "</form>";

                pagefooter();

        } else {

                // The user desires to rotate the image.

                // We use the rotate image function.
                rotate_image($path_to_primary_image, $degrees);

                // Get width and height here.

                $source_image_size_and_type = getimagesize($path_to_primary_image) or die($lang_image_processor_php['file_corrupt']);
                $source_image_width = $source_image_size_and_type[0];
                $source_image_height = $source_image_size_and_type[1];
                $source_image_type = $source_image_size_and_type[2];

                // Now we have to create the preview thumbnail.

                // The file has been rotated in the transitory directory. At this point, we
                // are ready to create the form that will allow the user to rotate the image.
                // It requires a preview thumbnail to be loaded. We will use the image_preview
                // function.

                $path_to_preview_image = image_preview($path_to_primary_image, $maximum_width);

                // Our preview thumbnail is now on the server. Let's create the
                // rotation form.

                make_form($_SERVER[PHP_SELF], $path_to_preview_image, $path_to_primary_image, $transitory_file_name);

        }

}

?>
