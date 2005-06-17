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
// CVS version: $Id: media.functions.inc.php,v 1.3 2004/07/24 15:04:09 gaugau Exp $
// ------------------------------------------------------------------------- //

// REQUIRES GLOBAL VAR: CONFIG
// REQUIRES GLOBAL FUNCTION: db_query

global $FILE_TYPES;

// Map content types to corresponding user parameters
$content_types_to_vars = array('image'=>'allowed_img_types','audio'=>'allowed_snd_types','movie'=>'allowed_mov_types','document'=>'allowed_doc_types');
$CONFIG['allowed_file_extensions'] = '';

if (count($FILE_TYPES)==0) {
         $result = db_query('SELECT extension, mime, content FROM '.$CONFIG['TABLE_FILETYPES'].';');
         while ($row = mysql_fetch_array($result)) {
             // Only add types that are in both the database and user defined parameter
        if ($CONFIG[$content_types_to_vars[$row['content']]]=='ALL' || is_int(strpos('/'.$CONFIG[$content_types_to_vars[$row['content']]].'/','/'.$row['extension'].'/')))
        {
            $FILE_TYPES[$row['extension']] = $row;
            $CONFIG['allowed_file_extensions'].= '/'.$row['extension'];
    }   }
    mysql_free_result($result);
}

$CONFIG['allowed_file_extensions'] = substr($CONFIG['allowed_file_extensions'],1);

function get_type($filename,$filter=null)
{
    global $FILE_TYPES;
    if (!is_array($filename))
        $filename = explode('.',$filename);
    $EOA = count($filename)-1;
    $filename[$EOA] = strtolower($filename[$EOA]);

    if (!is_null($filter) && $FILE_TYPES[$filename[$EOA]]['content']==$filter)
        return $FILE_TYPES[$filename[$EOA]];
    elseif (is_null($filter))
        return $FILE_TYPES[$filename[$EOA]];
    else
        return null;
}

function is_image(&$file)
{
    return get_type($file,'image');
}

function is_movie(&$file)
{
    return get_type($file,'movie');
}

function is_audio(&$file)
{
    return get_type($file,'audio');
}

function is_document(&$file)
{
    return get_type($file,'document');
}

function is_known_filetype($file)
{
    return is_image($file) || is_movie($file) || is_audio($file) || is_document($file);
}

// Not implemented yet--will be implemented by Chris
/*
function cpg_file_html(&$file,$type='thumb',$file_title='')
{
    global $CONFIG, $pic_title;

    $mime_content = get_type($file['filename']);
    $extension = file_exists("images/thumb_{$mime_content['extension']}.jpg") ? $mime_content['extension']:$mime_content['content'];

    if ($mime_content['content']=='image' && $type=='thumb') {
        $file['pwidth'] = 100;
        $file['pheight'] = 100;
    }

    if ($type=='thumb')
        $file_url = get_pic_url($file, 'thumb',$file_title='');
    elseif ($CONFIG['make_intermediate'] && max($file['pwidth'], $file['pheight']) > $CONFIG['picture_width'])
        $file_url = get_pic_url($file, 'normal');
    else
        $file_url = get_pic_url($file, 'fullsize');

    $image_size = compute_img_size($file['pwidth'], $file['pheight'], $CONFIG['alb_list_thumb_size']);
    if (($file['pwidth']==0 || $file['pheight']==0) && $type!='thumb')
        $image_size['geom']='';


    if ($mime_content['content']=='image') {
        if (isset($image_size['reduced'])) {
            $file_html = "<a href=\"javascript:;\" onClick=\"MM_openBrWindow('displayimage.php?pid=$pid&fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=yes,status=yes,resizable=yes,width=" . $file['pwidth']+16 . ",height=" . $file['pheight']+16 . "')\">"
            $file_title = ""
        }
        return "<img src=\"" . $file_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$file['filename']}\" title=\"$pic_title\">";
    }
    elseif ($type=='thumb')
        return "<img src=\"images/thumb_{$extension}.jpg\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$file['filename']}\" title=\"$pic_title\">";
    elseif ($mime_content['content']=='movie')
        return "<object {$image_size['geom']}><param name=\"movie\" value=\"". $file_url . "\"><embed {$image_size['geom']} src=\"". $file_url . "\"></embed></object>\n";
    elseif ($mime_content['content']=='audio')
        return "<object {$image_size['geom']}><param name=\"movie\" value=\"". $file_url . "\"><embed {$image_size['geom']} src=\"". $file_url . "\"></embed></object>\n";
    elseif ($mime_content['content']=='document')
        return "<a href=\"{$file_url}\" target=\"_blank\" class=\"document_link\"><img src=\"images/thumb_$extension.jpg\" border=\"0\" class=\"image\" /></a>\n";
}*/
?>
