<?php
function img_path($img_path)
{
    $img_path = get_template_directory_uri() . '/assets/img/' . $img_path;
    return $img_path;
}
