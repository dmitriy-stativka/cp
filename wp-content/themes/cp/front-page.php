<?php
/*
Template Name: Front-page
*/

 get_header(); ?>


<!-- top-black-slider part -->
<section class="top-site">
    <section class="top-site__bg">
        <section class="top-site__content">
              <?php
                $params = array(
                    'post_type' => 'settings',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                          <?php while ( have_rows('social_list') ) : the_row(); ?>
                            <?php $instagram = get_sub_field('instagram');
                                  $telegram = get_sub_field('telegram');
                                  $youtube = get_sub_field('youtube');
                             
                            ?>
                            <ul class="top-social">
                            
                              <li>
                                <a target="_blank" href="<?php echo $instagram;?>"
                                  ><svg class="icon"><use xlink:href="#inst" /></svg>
                                  </a>
                              </li>
                              <li>
                                <a target="_blank" href="<?php echo $telegram;?>"
                                  ><svg class="icon"><use xlink:href="#telegram" /></svg>
                                  </a>
                              </li>
                              <li>
                                <a target="_blank" href="<?php echo $youtube;?>"
                                  ><svg class="icon"><use xlink:href="#youtube" /></svg>
                                  </a>
                              </li>
                            </ul>
                          <?php endwhile; ?>       
                        <?php endwhile; ?>
                <?php endif; ?>
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
                                    }?> <?php pll_e('views'); ?>
                                    </span>
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
                            <?php the_post_thumbnail( array(400, 400), ['class' => 'slider-for__bg-img']); ?>
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
                              <p class="slider-for__text"> <?php the_field('description');?></p>
                              <div class="slider-nav__block-bottom">
                                  <span><?php echo get_the_date('d.m.Y'); ?></span>
                                  <span> <?php 
                                  if(get_post_meta ($post->ID,'views',true)){
                                      echo get_post_meta ($post->ID,'views',true);
                                    }else{
                                      echo '0';
                                    }?> <?php pll_e('views'); ?></span>
                              </div>
                              <a href="<?php the_permalink(); ?>" class="read-more"><?php pll_e('readArea'); ?></a>
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
                        <!-- </div>           -->
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
       <?php
          $mypost_Query = new WP_Query( array(
              'post_type'        => 'post',                           # post, page, custom_post_type 
              'post_status'      => 'publish',                        # статус записи 
              'posts_per_page'   => 3,                                # кол-во постов вывода/загрузки 
          ) );

          if ( $mypost_Query->have_posts() ) {
              while ( $mypost_Query->have_posts() ) { $mypost_Query->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="flex_col-tab--1-2 flex_col-desk--1-3 main-content__block">
                  <?php the_post_thumbnail( array(400, 400) ); ?>
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
                      <h3><?php the_title();?></h3>
                      <div class="slider-nav__block-bottom">
                          <span><?php echo get_the_date('d.m.Y'); ?></span>
                          <span> <?php 
                          if(get_post_meta ($post->ID,'views',true)){
                              echo get_post_meta ($post->ID,'views',true);
                          }else{
                              echo '0';
                          }?> <?php pll_e('views'); ?></span>
                      </div>
                  </a> 
                  <?php
              }
          }
          else { echo('<p>Извините, нет записей.</p>'); }
          wp_reset_postdata();
          ?>
          <?php if ( $mypost_Query->max_num_pages > 1 ) { ?>
              <script> var this_page = 1; </script>
              <a class="btn-loadmore btn__more-blocks" data-max-pages='<?php echo $mypost_Query->max_num_pages; ?>'>Загрузить ещё </a>
          <?php } ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <script>
              jQuery(function($){
                $('.btn-loadmore').on('click', function(){
                    let _this = $(this);
                    _this.html('<i class="fas fa-redo fa-spin"></i> Загрузка...'); // изменение кнопки 

                    let data = {
                        'action': 'loadmore',
                        'query': _this.attr('data-param-posts'),
                        'tpl': _this.attr('data-tpl')
                    }

                    $.ajax({
                        url: '/wp-admin/admin-ajax.php',
                        data: data,
                        type: 'POST',
                        success:function(data){
                            if (data) {
                                _this.html('<a class="btn__more-blocks"> Загрузить ещё </a>');
                                _this.after(data);       // где вставить данные 
                                this_page++;                   // увелич. номер страницы +1 
                                if (this_page == _this.attr('data-max-pages')) {
                                    _this.remove();               // удаляем кнопку, если последняя стр. 
                                }
                            } else {                              // если закончились посты 
                                _this.remove();                   // удаляем кнопку 
                            }
                        }
                  });
                });
              });
         </script>
       </div>
    </div>
    <div class="flex_col--1-1 flex_col-tab--4-5 flex_col-desk--1-4 main-right__conteiner">
      <div class="main__search-block-line">
        <?php
          $count_posts = wp_count_posts();
          $published_posts = $count_posts->publish;
        ?>
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
          <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder='<?php pll_e('searchPlaceholder'); ?> <?php echo $published_posts;?> <?php pll_e('searchlast'); ?>' />
          <button>
            <span><svg class="icon"><use xlink:href="#search"/></svg></span>
          </button>
        
        </form>
      </div>
      <h2><?php pll_e('popular'); ?></h2>
      <div class="main-right__conteiner__blocks">
        <?php $populargb = new WP_Query('showposts=10&meta_key=post_views_count&orderby=meta_value_num' );
          while ( $populargb->have_posts() ) {
            $populargb->the_post(); ?>
            <a class="main-right__conteiner-article" href="<?php the_permalink(); ?>">
              <div class="conteiner-article-left">
                <h3><?php the_title(); ?></h3>
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
              <div class="conteiner-article-img">
                <?php the_post_thumbnail(); ?>
              </div>
            </a>
        <?php } ?>
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

  

    
<div class="video_content">
    
    <div id="video_row">
       
        <div id="playlist">
            <div id="youtube-playlist"></div>
        </div>

        <div id="ifr">
            <iframe id="iframe_video" src="" frameborder="0"></iframe>
        </div>
        
    </div>
    <div class="linkYouTube">
   
        <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channelid="UC--KGm_wXKAEF-48QX69a5w" data-layout="default" data-count="default"></div>
    </div>
</div>


     
  
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
          <?php if (have_posts()) : ?>
            <?php /* The loop */ ?>
              <?php while (have_posts()) : the_post(); ?>
                  <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <?php the_content(); ?>
                  </article>
              <?php endwhile; ?>
          <?php endif; ?>

        </div>
        <div class="flex_col-desk--1-3 half-hidden__right">
          <span class="half-hidden__right-amount"><?php pll_e('two'); ?></span>
          <span><?php pll_e('readArticles'); ?></span>
          <p><?php pll_e('textArticles'); ?></p>
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


<?php
  $params = array(
    'post_type' => 'settings',
    'posts_per_page' => 3
  );
  $query = new WP_Query( $params );
  ?>
  <?php if($query->have_posts()): ?>
    <?php 
      $video_key = get_field('keyPlaylist', 65); 
    ?>
  <?php endif; 
?>



<script>
	var htmlString = "";
	var apiKey = 'AIzaSyDKpAiddLx6o8GGdbU54qlMKPaMbAOBdds';
	var maxResults = 100; // количество отображаемых видео в списке

	var playlistID = '<?php echo $video_key; ?>'; //сюда передавать key плейлиста в зависимости от товара
	var playlists = [{
	    playlistId: playlistID,
	    el: '#youtube-playlist'
	  }
	];
	playlists.forEach(function(playlist) {
	  getVideoFeedByPlaylistId(playlist.playlistId, playlist.el);
	})
	function getVideoFeedByPlaylistId(playlistId, el) {
  		$.getJSON('https://www.googleapis.com/youtube/v3/playlistItems?key=' + apiKey + '&playlistId=' + playlistId + '&part=snippet&maxResults=' + (maxResults > 50 ? 50 : maxResults), function(data) {
    		$.each(data.items, function(i, item) {
	      var videoID = item['snippet']['resourceId']['videoId'];
	      var title = item['snippet']['title'];
	      var videoURL = 'https://www.youtube.com/embed/' + videoID + '';
	      htmlString += '<div class="video-wrap" onclick="video(\''+ videoID +'\');" data-url="'+ videoURL +'"><div class="video"><img src="https://i.ytimg.com/vi/' + videoID + '/mqdefault.jpg"></div>' + '<div class="title">' + title + '</div></div>';
    		});
    		$(el).html(htmlString);
    		htmlString = '';
	  	});
	}
 		function video(videoID){ //Передает key через атрибут
 			var DataUrlVideo = 'https://www.youtube.com/embed/' + videoID + '?rel=0&amp;autoplay=1';
 			$('#iframe_video').attr('src', DataUrlVideo);
    	} 
	function func() {
	  	let lala = $(".video-wrap").attr("data-url");

 		$('#iframe_video').attr('src', lala);
	}
	setTimeout(func, 1500);
</script>