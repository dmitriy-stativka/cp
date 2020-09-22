<?php
/*
Template Name: page-news
*/
 get_header(); ?>

<section class="page-top page-menu">   
    <div class="page__container page__container-menu">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span> <?php pll_e('back'); ?></a>
          <?php include('templates/breadcrumbs.php');?>       
        <h1 class="page-title page-menu__title"><?php the_title(); ?></h1>
    </div>
</section>




<div class="page__container page__container-menu">
    <div class="page-news__content-blocks-items">
        <?php
        $params = array(
            'post_type' => 'news',
            'posts_per_page' => -1,
        );
        $query = new WP_Query( $params );
        ?>
        <?php if($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post() ?>
                    <a class="flex_col-tab--1-2 flex_col-desk--1-4 main-content__block" href="<?=the_permalink( $post->ID )?>">


                        <?php $name = get_field('name_title'); ?>
                        <?php $mini_desc = get_field('mini_desc'); ?>
                        

                        <h3><?php echo $name; ?></h3>

                        <p class="mini_desc"><?php echo $mini_desc ?></p>

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
                <?php endwhile; ?>
        <?php endif; ?>
  </div>

</div>


<?php get_footer(); ?>