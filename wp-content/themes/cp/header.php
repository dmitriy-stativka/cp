<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head>
section and everything up until
<div id="content">
  * * @link
  https://developer.wordpress.org/themes/basics/template-files/#template-partials
  * * @package cp */ ?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>
    >
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
      <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat:wght@500&display=swap"
        rel="stylesheet"
      />
      <link rel="profile" href="https://gmpg.org/xfn/11" />
      <link
        rel="stylesheet"
        href="/wp-content/themes/cp/styles/styles.min.css"
      />
      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>
      >
      <?php wp_body_open(); ?>

      <div class="wrapper">
        <header class="header">
          <div class="header_logo">
            <?php the_custom_logo();?>
          </div>
          <div class="header_nav-bar">
            <ul>
              <li><a href="#">Мероприятия</a></li>
              <li><a href="#">Експертная деятельность</a></li>
              <li><a href="#">Дискуссии и диалоги</a></li>
              <li><a href="#">Научная критика</a></li>
              <li><a href="#">Публикации</a></li>
            </ul>
          </div>
          <div class="header_nav-tools">
            <span class="nav-tools__search"></span>
            <a class="nav-tools__connect popup__toggle" href="#"
              >Обратная связь</a
            >
            <button class="nav-tools__burger">
              <span></span>
            </button>
          </div>
        </header>
