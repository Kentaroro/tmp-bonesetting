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
    <?php if (is_front_page()) : ?>
        <header class="w-full h-svh flex flex-col">
            <?php get_template_part('parts/top/fv'); ?>
            <?php get_template_part('parts/public/header-nav'); ?>
        </header>
    <?php else : ?>
        <header class="w-full">
        </header>
    <?php endif; ?>