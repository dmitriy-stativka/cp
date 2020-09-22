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

    <body <?php body_class(); ?> >
      <?php wp_body_open(); ?>

      <div class="wrapper">
        <header class="header">
          <div class="header_logo">
            <?php
                if(pll_current_language() == 'ru'){
                    $post_id = '147';
                }elseif(pll_current_language() == 'uk'){
                    $post_id = '47';
                }elseif(pll_current_language() == 'en'){
                    $post_id = '74';
                }
            ?>

          <a href="<?php echo get_page_link($post_id); ?>">
              <?php 
                $logo_img = '';
                if( $custom_logo_id = get_theme_mod('custom_logo') ){
                  $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                    'class'    => 'custom-logo',
                    'itemprop' => 'logo',
                  ) );
                }
                
                echo $logo_img;
              ?>
          </a>

            
          </div>
            <?php
              $args = array(
                'orderby'            => 'name',
                'order'              => 'desc',
                'style'              => 'list',
                'title_li'           => '',
              );
            ?>
            <ul class="header_nav-bar">
              <?php
                wp_list_categories($args);
              ?>
            </ul>
   
          <div class="header_nav-tools">
            <span class="nav-tools__search"></span>
            <a class="nav-tools__connect popup__toggle" href="#">
              <span class="nav-tools__connect-text"><?php pll_e('callback'); ?></span>
              <span class="nav-tools__connect-icon"><span><svg class="icon"><use xlink:href="#letter"/></svg></span></span>
            </a>
            <button class="nav-tools__burger">
              <span></span>
            </button>
          </div>  
        </header>