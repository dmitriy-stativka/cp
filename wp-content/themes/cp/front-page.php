<?php
/*
Template Name: Front-page
*/

 get_header(); ?>

<!-- top-black-slider part -->
<section class="top-site">
    <section class="top-site__bg">
        <section class="top-site__content">
            <ul class="top-social">
                <li>
                  <a href="#"
                    ><svg class="icon"><use xlink:href="#inst" /></svg>
                    </a>
                </li>
                <li>
                  <a href="#"
                    ><svg class="icon"><use xlink:href="#telegram" /></svg>
                    </a>
                </li>
                <li>
                  <a href="#"
                    ><svg class="icon"><use xlink:href="#youtube" /></svg>
                    </a>
                </li>
              </ul>
              <div class="top-slider">
              
                  <div class="slider-nav flex_col-desk--1-4">
         
                    <?php
                      global $post;
                      $args = array( 'numberposts' => 4 , 'category' => 2, 'orderby' => 'date');
                      $myposts = get_posts( $args );
                      foreach( $myposts as $post ){ setup_postdata($post); ?>
                        <div class="slider-nav__block">
                          <div class="slider-nav__block-top blue">
                              <?php
                                $categories = get_the_category();
                                $output = '';
                                if($categories){
                                    foreach($categories as $category) {
                                        $rl_category_color = rl_color($category->cat_ID);
                                        $output = $category->cat_name;
                                    }
                                    echo '<span class="nav__block-top__category" style="background: '.$rl_category_color.' ;">'. trim($output) . '</span>';

                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) {
                                          echo '<span class="nav__block-top__single-categ" style="color: '.$rl_category_color.'">'. $tag->name . '<i style="background: ' .$rl_category_color .';" class="dot-color"></i>' . ' </span>'; 
                                        }
                                    }

                                }
                              ?>
                          </div>
                          <div class="slider-nav__block-center">
                              <p><?php the_title(); ?></p>
                            </div>
                          <div class="slider-nav__block-bottom">
                              <span><?php echo get_the_date('d.m.Y'); ?></span>
                              <span> <?php 
                              if(get_post_meta ($post->ID,'views',true)){
                                  echo get_post_meta ($post->ID,'views',true);
                                }else{
                                  echo '0';
                                }?> <?php pll_e('views'); ?></span>
                          </div>
                        </div>
                        <?php
                      }
                      wp_reset_postdata();
                    ?>
                   
                  </div>
                  <div class="flex_col-tab--1-1 flex_col-desk--3-4 slider-for">    
                    
                    <?php
                      global $post;
                      $args = array( 'numberposts' => 4 , 'category' => 2, 'orderby' => 'date');
                      $myposts = get_posts( $args );
                      foreach( $myposts as $post ){ setup_postdata($post); ?>
                        <div class="slider-for__container">
                        <img class="slider-for__bg-img" src="/wp-content/themes/cp/images/bg-blur-top-site.jpg" alt=""></img>
                          <div class="slider-nav__block-top">
                              <?php
                                $categories = get_the_category();
                                $output = '';
                                if($categories){
                                    foreach($categories as $category) {
                                        $rl_category_color = rl_color($category->cat_ID);
                                        $output = $category->cat_name;
                                    }
                                    echo '<span class="nav__block-top__category" style="background: '.$rl_category_color.' ;">'. trim($output) . '</span>';

                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) {
                                          echo '<span class="nav__block-top__single-categ" style="color: '.$rl_category_color.'">'. $tag->name . '<i style="background: ' .$rl_category_color .';" class="dot-color"></i>' . ' </span>'; 
                                        }
                                    }

                                }
                              ?>
                          </div>

                          <h2 class="slider-for-center"><?php the_title(); ?></h2>
                          <p class="slider-for__text">
                            Рамки и место обучения кадров представляет собой интересный эксперимент проверки направлений прогрессивного развития. Товарищи! консультация с широким активом позволяет оценить значение модели развития. Не следует, однако забывать, что консультация с широким активом требуют определения и уточнения дальнейших направлений развития.                      
                          </p>

                          <div class="slider-nav__block-bottom">
                              <span><?php echo get_the_date('d.m.Y'); ?></span>
                              <span> <?php 
                              if(get_post_meta ($post->ID,'views',true)){
                                  echo get_post_meta ($post->ID,'views',true);
                                }else{
                                  echo '0';
                                }?> <?php pll_e('views'); ?></span>
                          </div>

                          <a href="#" class="read-more">Читать статью полностью</a>

                        </div>
                        <?php
                      }
                      wp_reset_postdata();
                    ?>

                    <div class="nav-bar__mobile">
                          <div class="nav-bar__prev"></div>
                          <div class="dots-mobile">
                            <div class="dot dot-active"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                          </div>                        
                          <div class="nav-bar__next"></div>
                      </div>          
                    </div>
                </div>
              </div>
          </section>
    </section>     
</section>

<!-- End of top-black-slider part -->

<!-- Beginning of section with different single articles and search block -->
<section class="main-content">
  <div class="main_container">

    <div class="flex_col-desk--3-4 main-left__container">
       <div class="blocks-container">

          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
      
          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
      
          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
      
          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
      
          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
      
          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>

          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>

          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>

          <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
            <img src="/wp-content/themes/cp/images/img-for-article1.jpg" alt="">
            <div class="slider-nav__block-top">
              <span class="nav__block-top__category" style="background: #efc066"> Фахові заходи </span>
              <span class="nav__block-top__single-categ" style="color: #efc066">
                Засідання клубу 
                <i style="background: #efc066 ;" class="dot-color"></i>
              </span>
            </div>
            <h3>
              Законы общественного процесса. 
              Концепции развития общества.
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </a>
       </div>

       <a href="#" class="btn__more-blocks">
        Загрузить еще
       </a>
    </div>
    <div class="flex_col--1-1 flex_col-tab--4-5 flex_col-desk--1-4 main-right__conteiner">
      <div class="main__search-block-line">
        <input type="search" placeholder="Искать среди 10 статей..." />
        <button>
          <span><svg class="icon"><use xlink:href="#search"/></svg></span>          
        </button>
      </div>
      <h2>Популярные статьи</h2>
      <div class="main-right__conteiner__blocks">

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

        <a class="main-right__conteiner-article" href="#">
          <div class="conteiner-article-left">
            <h3>
              Законы общественного процесса. 
              Концепции развития
            </h3>
            <div class="slider-nav__block-bottom">
              <span>04.04.2020</span>
              <span>1 234 просмотров</span>
            </div>
          </div>
          <div class="conteiner-article-img">
            <img src="/wp-content/themes/cp/images/img-for-right-main-block.jpg" alt="">
          </div>
        </a>

      </div>
    </div>
  </div>
</section>
<!-- End of section with different single articles and search block -->

<!-- Этто видео блог -->
<section class="video-block">
  <div class="bg-video-block">      
  </div>
  <div class="video-block__container flex_col-desk">
    <div class="video-block__top">
      <h2>Полезные материалы с нашего YouTube канала</h2>
      <a href="">Посетить YouTube канал  <span class="right-arrow"></span></a>
    </div>

  
      <!--Sidebar-->
      <!-- <div id="slideBox"> -->
      <!-- <div class="sliderSidebar">
        <div class="height"><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        <div class="height"><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        <div class="height"><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        <div class="height"><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        <div class="height"><iframe   src="https://www.youtube.com/embed/8_kqUfJcJAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="height"><iframe  src="https://www.youtube.com/embed/8_kqUfJcJAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>	
        
      <div id="main-image" class="sliderMain">
        <div><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        <div><iframe src="https://www.youtube.com/embed/8_kqUfJcJAw"></iframe></div>
        <div><img  src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
        
        <div><iframe src="https://www.youtube.com/embed/8_kqUfJcJAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div><iframe src="https://www.youtube.com/embed/8_kqUfJcJAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  
      
        <div><img src="/wp-content/themes/cp/images/video-bg.png" alt=""></div>
      </div>
        
    </div> -->
    <!--slideBox-->
  
  </div>
</section>
<!-- Этто был видео блог -->

<!-- About us section that is located above footer -->
<section class="about-us">
  <div class="about-us__container">
    <div class="flex_col--1-2 flex_col-desk--1-4 about-us__img-block">
      <img src="/wp-content/themes/cp/images/About-us-img.png" alt="">
    </div>
    <div class="flex_col-desk--3-4 about-us__text-block">
      <div class="text-block__half-hidden">
        <div class="flex_col-desk--2-3 flex_col-tab--1-1 half-hidden__left">
          <h1>
            Содействие совершенствованию гражданского законодательства 
          </h1>
          <p>
            Рамки и место обучения кадров представляет собой интересный эксперимент проверки направлений прогрессивного развития. Товарищи! консультация с широким активом позволяет оценить значение модели развития. Не следует, однако забывать, что консультация с широким активом требуют определения и уточнения дальнейших направлений развития.
          </p>       
          <p>
            Товарищи! новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий. Таким образом консультация с широким активом требуют от нас анализа системы обучения кадров, соответствует насущным потребностям.
          </p>
        </div>
        <div class="flex_col-desk--1-3 half-hidden__right">
          <span class="half-hidden__right-amount">2 тыс.</span>
          <span>Статей написано нашими профессиональными авторами.</span>
          <p>Рамки и место обучения кадров представляет собой интересный эксперимент проверки направлений прогрессивного развития. Товарищи! консультация с широким активом позволяет.</p>
        </div>
      </div>
      <div class="text-block__btn">
        <span class="hidden-block__open">Развернуть</span>
        <a class="hidden-block__about-link" href="#">Подробнее о нас</a>
      </div>
    </div>
  </div>
</section>
<!-- End of about us section that is located above footer -->


<?php get_footer(); ?>
