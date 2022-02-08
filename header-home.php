<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html><!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
      
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
      <title>NAVE Agency</title>
      
      <link href="style.css" rel="stylesheet" type="text/css" />
      
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body class="fullscreen">
    <div class="outline"></div>
    <video autoplay muted loop class="background-video">
      <source src="<?=get_template_directory()/?>/assets/imgs/space-purple.webm" type="video/mp4">
    </video>
    <main class="fullscreen">