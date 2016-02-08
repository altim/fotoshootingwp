<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>