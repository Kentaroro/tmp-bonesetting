<?php
function img_path($img_path)
{
    $img_path = get_template_directory_uri() . '/assets/img/' . $img_path;
    return $img_path;
}

function com_info($key)
{
    $com_items = get_field('com_items', 'option');
    $com_info = $com_items[$key];
    return $com_info;
}

function site_logo($size = 'full')
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, $size);
    if ($logo) {
        return $logo[0];
    }
    return false;
}
