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
	  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat:wght@500&display=swap" rel="stylesheet">
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
        <!-- search block (invisible). After click on search-btn becomes visible-->
        <div class="nav-tools__search-block_click">
          <div class="search-block_click-container">
            <div class="search-block-line">
              <input type="search" placeholder="Поиск среди 1 статей" />
              <button>
                <svg class="icon"><use xlink:href="#fish" /></svg>
              </button>
            </div>
            <div class="search-block-links">
              <div><span>Часто ищут:</span></div>
              <div>
                <a href="">Законы общественного процесса</a>
                <a href="">Концепции развития общества</a>
                <a href="">Законы общественного процесса</a>
                <a href="">Концепции развития общества</a>
                <a href="">Новая модель организационной деятельности</a>
                <a href="">Законы общественного процесса</a>
                <a href="">Новая модель организационной деятельности</a>
              </div>
            </div>
          </div>
        </div>
		<!-- end of search block -->
		<!-- Burger-menu onclick block -->
			<div class="burger-menu__block">
				<div class="burger-menu__container">
					
				</div>
			</div>
		<!-- End of Burger-menu onclick block -->
      </div>
    </body>
  </html>
</div>
