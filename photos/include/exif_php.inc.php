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
  $Source: /cvsroot/coppermine/stable/include/exif_php.inc.php,v $
  $Revision: 1.7 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

define("EXIF_CACHE_FILE","exif.dat");
require("include/exifReader.inc.php");

function exif_parse_file($filename)
{        global $CONFIG;
        if (!is_readable($filename)) return false;
        $size = @getimagesize($filename);
        if ($size[2] != 2) return false; // Not a JPEG file

        //Check if we have the data of the said file in the table
        $sql = "SELECT * FROM {$CONFIG['TABLE_EXIF']} ".
                  "WHERE filename = \"$filename\"";

        $result = db_query($sql);

        if (mysql_num_rows($result)){
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                $exifParsed = unserialize($row["exifData"]);
                return $exifParsed;
        }

        // No data in the table - read it from the image file
        $exifObj = new phpExifReader($filename);
        $exif = $exifObj->getImageInfo();

        $exifParsed = array();

        $Make = isset($exif['make']);
        $Model = isset($exif['model']);

        if (isset($exif['make']) && isset($exif['model'])){
                $exifParsed['Camera'] = trim($exif['make'])." - ".trim($exif['model']);
        }

        if (isset($exif['DateTime'])){
                $exifParsed['DateTaken'] = $exif['DateTime'];
        }

        if (isset($exif['fnumber'])){
                $exifParsed['Aperture'] = $exif['fnumber'];
        }

        if (isset($exif['exposureTime'])){
                $exifParsed['ExposureTime'] = $exif['exposureTime'];
        }

        if (isset($exif['focalLength'])){
                $exifParsed['FocalLength'] = $exif['focalLength'];
        }

        if (isset($exif['isoEquiv'])){
                $exifParsed['ISO'] = $exif['isoEquiv'];
        }

        if (isset($exif['exifComment'])){
                $comment = $exif['exifComment'];
                $exifParsed['Comment'] = $comment; // eregi_replace("ASCII"," ", $comment);
        }

        // Insert it into table for future reference
        $sql = "INSERT INTO {$CONFIG['TABLE_EXIF']} ".
                  "VALUES ('$filename', '".addslashes(serialize($exifParsed))."')";

        $result = db_query($sql);

        return $exifParsed;
}
?>