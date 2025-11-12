<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="fixed top-0 left-0 right-0 z-50">
        <?php get_template_part('parts/public/header-nav'); ?>
        <?php get_template_part('parts/public/header-nav-sp'); ?>
    </header>