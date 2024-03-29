<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package belco
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <?php if (is_singular() && pings_open(get_queried_object())) : ?>
   <?php endif; ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <?php wp_body_open(); ?>


   <?php
   $belco_preloader = get_theme_mod('belco_preloader', false);
   $belco_backtotop = get_theme_mod('belco_backtotop', false);

   $belco_preloader_logo = get_template_directory_uri() . '/assets/img/favicon.png';

   $preloader_logo = get_theme_mod('preloader_logo', $belco_preloader_logo);

   ?>

   <!-- /.preloader -->
   <?php if (!empty($belco_preloader)) : ?>
      <!-- pre loader area start -->
      <div class="preloader">
         <div class="preloader__image"></div>
      </div>
      <!-- /.preloader -->
      <!-- pre loader area end -->
   <?php endif; ?>

   <?php if (!empty($belco_backtotop)) : ?>
      <!-- back to top start -->
      <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa-sharp fa-light fa-arrow-up"></i></a>
      <!-- back to top end -->
   <?php endif; ?>
   <div class="custom-cursor">
      <div class="custom-cursor__cursor"></div>
      <div class="custom-cursor__cursor-two"></div>
   </div>

   <!-- header start -->
   <?php do_action('belco_header_style'); ?>
   <!-- header end -->

   <!-- wrapper-box start -->
   <?php do_action('belco_before_main_content'); ?>