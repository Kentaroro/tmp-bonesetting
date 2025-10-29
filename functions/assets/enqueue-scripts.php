<?php

/**
 * Assets Enqueue Management
 * 
 * CSS・JavaScriptファイルの読み込み管理を行います。
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * テーマで使用するCSS・JavaScriptを読み込む
 */
function enqueue_theme_assets()
{
    $theme_version = wp_get_theme()->get('Version');

    // テーマのメインCSS
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');


function mytheme_enqueue_scripts()
{
    $theme_uri = get_template_directory_uri();
    $dev_mode = false;
    // 開発時は Vite dev サーバーから読み込む
    if ($dev_mode) {
        wp_enqueue_script('main-js', 'http://localhost:5173/src/main.ts', [], null, true);
        /*
        if (is_page()) {
            wp_enqueue_script('page-js', 'http://localhost:5173/src/page.ts', [], null, true);
        }
        if (is_single()) {
            wp_enqueue_script('single-js', 'http://localhost:5173/src/single.ts', [], null, true);
        }
        */
    } else {
        wp_enqueue_script('main-js', $theme_uri . '/assets/js/main.js', [], null, true);
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
