<?php
/*
Template Name: About-us
*/

 get_header(); ?>


<section class="page-top page-about">   
    <div class="page__container">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span> <?php pll_e('back'); ?></a>
        <div class="page__about-links top-nav__links">
            <?php include('templates/breadcrumbs.php');?>
        </div>
        <h1 class="page-title page-about__title"><?php the_title();?></h1>
    </div>
</section>

<section class="about-content">   
    <div class="flex_col-desk--1-1 about-content__container">
        <div class="about-content__logo">


            <?php
                $params = array(
                    'post_type' => 'about',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php $big_logo = get_field('big_logo')['url']; ?>
                    <img src="<?php echo $big_logo;?>" alt="">
                    <?php endwhile; ?>
            <?php endif; ?>
            

        </div>

        <div class="about-content__under-logo-text">
            <?php
                $params = array(
                    'post_type' => 'about',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php $mini_desc = get_field('mini_desc'); ?>
                    <p><?php echo $mini_desc;?></p>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="about-content__picture">
            <div class="about-content__picture-inside">
                <?php
                    $params = array(
                        'post_type' => 'about',
                        'posts_per_page' => 1,
                    );
                    $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $citata = get_field('citata'); ?>
                        <p><?php echo $citata;?></p>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="about-content__mission">
            <h2><?php pll_e('mission'); ?></h2>
            <p><?php pll_e('diyalnist'); ?></p>
        
            <div class="about-content__mission-blocks">
                <?php
                $params = array(
                    'post_type' => 'about',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php while ( have_rows('mission') ) : the_row(); ?>
                            <?php   $mission_image = get_sub_field('mission_image')['url'];
                                    $mission_title = get_sub_field('mission_title');
                                    $mission_desc = get_sub_field('mission_desc');
                            ?>        
                            <div class="flex_col-tab--1-1 flex_col-desk--1-4 mission-block">
                                <img src="<?php echo $mission_image; ?>" alt="">
                                <h4><?php echo $mission_title; ?></h4>
                                <span><?php echo $mission_desc; ?></span>
                            </div>
                        <?php endwhile; ?>       
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="about-content__list">
            <div class="flex_col-desk--1-3 about-content__list-img">
                <?php
                    $params = array(
                        'post_type' => 'about',
                        'posts_per_page' => 1,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image = get_field('image')['url']; ?>
                        <img src="<?php echo $image; ?>" alt="">
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flex_col-desk--2-3 about-content__list-text">
                <?php
                    $params = array(
                        'post_type' => 'about',
                        'posts_per_page' => 1,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $text = get_field('text'); ?>
                            <?php echo $text;?>
                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>   
</section>

<section class="about-slider">   
    <div class="slider slider-single">
        <?php
            $params = array(
                'post_type' => 'about',
                'posts_per_page' => 1,
            );
            $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php while ( have_rows('employees') ) : the_row(); ?>
                        <?php $foto_employees = get_sub_field('foto_employees')['url'];
                            $name_employees = get_sub_field('name_employees');
                            $dolgnost_employees = get_sub_field('dolgnost_employees');
                            $desc_employees = get_sub_field('desc_employees');
                        ?>    

                        <div>
                            <div class="about-slider__main-block">
                                <div class="flex_col-desk--2-3 slider__main-block__text">
                                    <h2><?php echo $name_employees;?></h2>
                                    <span><?php echo $dolgnost_employees;?></span>
                                    <p><?php echo $desc_employees;?></p>
                                </div>
                                <div class="flex_col-desk--1-3 slider__main-block__img">
                                    <img src="<?php echo $foto_employees;?>" alt="">
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>       
                <?php endwhile; ?>
            <?php endif; 
        ?>
    </div>
    <div class="slider-nav-about__container">
        <div class="slider-nav-about__container-blocks">
            <div class="slider slider-nav-about">

                <?php
                    $params = array(
                        'post_type' => 'about',
                        'posts_per_page' => 1,
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php while ( have_rows('employees') ) : the_row(); ?>
                                <?php $foto_employees = get_sub_field('foto_employees')['url'];
                                    $name_employees = get_sub_field('name_employees');
                                    $dolgnost_employees = get_sub_field('dolgnost_employees');
                                ?>    

                                <div>
                                    <div class="slider-nav-about-block">
                                        <img src="<?php echo $foto_employees;?>" alt="">
                                        <h4><?php echo $name_employees;?></h4>
                                        <span><?php echo $dolgnost_employees;?></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>       
                        <?php endwhile; ?>
                    <?php endif; 
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>