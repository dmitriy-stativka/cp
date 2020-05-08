<?php
/*
Template Name: menu-section
*/
 get_header(); ?>

<section class="page-top page-menu">   
    <div class="page__container page__container-menu">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span> <?php pll_e('back'); ?></a>
        <div class="top-nav__links page-menu__links">
          <?php include('templates/breadcrumbs.php');?>
        </div>
        <h1 class="page-title page-menu__title"><?php single_cat_title(); ?></h1>
    </div>
</section>

<div class="page__container page__container-menu">

    <section class="page-menu__content">
          <?php                                                                                          
            $current_cat = get_query_var('cat');
            global $ancestor;
            $childcats = get_categories('child_of='.$current_cat.'&hide_empty=0&orderby=id');
            if($childcats){
              echo '<ul class="page-menu__content-links">';
              foreach ($childcats as $childcat) {
                if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
                  echo '<li><svg class="icon"><use xlink:href="#line" /></svg><a href='.get_category_link($childcat->cat_ID).'>'.$childcat->cat_name . '</a></li>'; 
                  $mycat=get_the_category(); $mycat=$mycat[0];  
                  $postslist = get_posts('posts_per_page=-1&category='.$childcat->cat_ID);
                  $ancestor = $childcat->cat_ID; 
                } 
              } 
              echo '</ul>';
            }
          ?>
     
        <div class="page-menu__content-blocks">
            <!-- <h2>
                Все статьи на тему «Фахові заходи»
            </h2> -->

            <div class="page-menu__content-blocks-items">      
                  <?php $posts = get_posts ("category='.$current_cat.'&orderby=date&numberposts=4"); ?> 
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                            <a href="<?php the_permalink(); ?>" class="flex_col-tab--1-2 flex_col-desk--1-4 main-content__block">         
                                <?php the_post_thumbnail(); ?>
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
                                <h3><?php the_title(); ?></h3>
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
                            </a>

                        <?php endforeach; ?>
                    <?php endif;
                  ?>
            </div>
            <!-- <a href="#" class="btn__more-blocks" style="border-color: #efc066; color: #efc066;">
                Загрузить еще
            </a> -->
        </div>

    </section>

  <?php if(category_description()){ ?>

    <section class="about-us">
        <div class="about-us__container">
          <div class="flex_col--1-2 flex_col-desk--1-4 about-us__img-block">
            <img src="/wp-content/themes/cp/images/About-us-img.png" alt="">
          </div>
          <div class="flex_col-desk--3-4 about-us__text-block">
            <div class="text-block__half-hidden">
              <div class="flex_col--1-1 flex_col-tab--1-1 half-hidden__left">

                <?php echo category_description(); ?>

              </div>      
            </div>
            <div class="text-block__btn">
              <span class="hidden-block__open" style="color: #efc066;"><?php pll_e('seeMore'); ?></span>
              <a class="hidden-block__about-link" href="#" style="background-color: #efc066; color: #fff;"><?php pll_e('aboutUs'); ?></a>
            </div>
          </div>
        </div>
      </section>

  <?php } ?>
   

</div>


<?php get_footer(); ?>