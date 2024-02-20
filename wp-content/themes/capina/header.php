<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capina
 */
?>
        <?php
        //wp_nav_menu();
        ?>



    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#111111" />
    <title>Capnia</title>
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/WorkSansRegular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/WorkSansMedium.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/WorkSansBold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/BarlowRegular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/MontserratRegular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="<?php echo get_template_directory_uri(); ?>/fonts/MontserratBold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
  </head>
  <!-- body_class() -->
  <body class="page__body" >
  <?php wp_body_open(); ?>
    <a class="skiplink" href="#main" data-scroll data-menu-item
      >Go to main content</a
    >
    <div class="site-container">
      <header class="header">
  <div class="header__container container-additional">
    <a class="header__logo" href="#">
      <img
        loading="lazy"
        src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
        class="header__logo-image"
        width="176"
        height="40"
        alt="Capnia logo"
      />
    </a>
    <nav class="header__nav" aria-label="Main navigation">
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="#" class="header__nav-link">
            <span class="header__nav-link-text">CoSense</span>
            Product
          </a>
        </li>
        <li class="header__nav-item">
          <button
            class="header__nav-link js-btn-dropdown"
            type="button"
            aria-label="Open submenu navigation"
            title="Open submenu navigation"
          >
            Clinical Resources
          </button>
          <div class="dropdown">
            <ul class="dropdown__list">
              <li class="dropdown__item">
                <a class="dropdown__link" href="#"
                  ><span class="dropdown__link-text">CoSense</span>Studies</a
                >
              </li>
              <li class="dropdown__item">
                <a class="dropdown__link" href="#">Bibliography</a>
              </li>
              <li class="dropdown__item">
                <a class="dropdown__link" href="#">Guidelines</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="header__nav-item">
          <a href="#" class="header__nav-link">About Us</a>
        </li>
        <li class="header__nav-item">
          <a href="#" class="link">Contact Us</a>
        </li>
      </ul>
    </nav>
  </div>
</header>