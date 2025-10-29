<?php

/**
 * Custom Post Types Registration
 * 
 * カスタム投稿タイプの登録を行います。
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * カスタム投稿タイプを登録
 */
function create_post_type()
{
    // お知らせ【英語】
    register_post_type(
        'news',
        array(
            'label' => 'お知らせ',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_position' => 5,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            ),
            'rewrite' => array(
                'slug' => 'news',
                'with_front' => false,
            ),
        )
    );
}
add_action('init', 'create_post_type');
