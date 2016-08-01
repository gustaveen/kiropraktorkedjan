<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic,700,900' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/kk_16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/kk_32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/kk_48x48.png" sizes="48x48">

  <!-- Apple Touch png -->
  <link rel="apple-touch-icon" sizes="57x57" href="http://kiropraktorkedjan.se/favicon-57.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://kiropraktorkedjan.se/favicon-57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://kiropraktorkedjan.se/favicon-72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://kiropraktorkedjan.se/favicon-114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="http://kiropraktorkedjan.se/favicon-120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="http://kiropraktorkedjan.se/favicon-144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="http://kiropraktorkedjan.se/favicon-152.png">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
