<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="p-4">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => false,
        'menu_class' => 'flex space-x-4',
    ));
    ?>
</nav>
