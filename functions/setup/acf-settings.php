<?php
// トップページ設定画面の作成
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'テーマ設定', // ページ上部タイトル
        'menu_title' => 'テーマ設定', // 管理メニュー名
        'menu_slug' => 'theme-settings', // URLスラッグ
        'capability' => 'edit_posts',
        'redirect' => false, // サブページにリダイレクトしない
        'icon_url' => 'dashicons-admin-home', // 任意（アイコン）
        'position' => 3, // メニュー位置（3=ダッシュボードのすぐ下）
    ]);
}
