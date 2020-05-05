<?php
/*
Template Name: page-contacts
*/
 get_header(); ?>

<section class="page-top page-contacts">   
    <div class="page__container">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span> <?php pll_e('back'); ?></a>
        <div class="top-nav__links page-contacts__links">
            <?php include('templates/breadcrumbs.php');?>
        </div>
        <h1 class="page-title page-contacts__title"><?php the_title();?></h1>
    </div>
</section>

<section class="main-content__contacts">
    <div class="flex_col-desk--1-1 contacts-content__container">

        <div class="main-content__contacts-text">
            <span><?php pll_e('contactText'); ?></span>
        </div>
        <div class="main-content__contacts-mail">            
            <svg class="icon contacts-mail__bg"><use xlink:href="#black-letter" /></svg>
                <?php
                    $params = array(
                        'post_type' => 'settings',
                        'posts_per_page' => 1
                    );
                    $query = new WP_Query( $params );
                    ?>
                    <?php if($query->have_posts()): ?>
                        <?php 
                            $mail_info = get_field('mail', 65);  
                        ?>
                        <span class="mail-adress"><?php echo $mail_info;?></span>
                    <?php endif; 
                ?>
        </div>
        <div class="main-content__contacts-links">

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
                                <a href="<?php echo $instagram;?>">
                                    <svg class="icon"><use xlink:href="#yellow-inst" /></svg>
                                </a>
                                <a href="<?php echo $telegram;?>">
                                    <svg class="icon"><use xlink:href="#blue-telegram" /></svg>
                                </a>
                                <a href="<?php echo $youtube;?>">
                                    <svg class="icon"><use xlink:href="#red-ytb" /></svg>
                                </a> 
                            <?php endwhile; ?>       
                        <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</section>

<section class="contacts-form">
    <div class="flex_col-desk--1-1 contacts-content__container">
        <h2><?php pll_e('questions'); ?></h2>
        <?php echo do_shortcode('[cf7form cf7key="contact-page"]');?>
        <!-- <form action="">
            <div class="flex_col-tab--1-1 flex_col-desk--2-3 form-block ">
                <input class="flex_col-desk--1-2" type="text" placeholder="Имя*" required>
                <input class="flex_col-desk--1-2" type="text" placeholder="Тема">          
                <input class="flex_col-desk--1-2" type="email" placeholder="Email*" required>  
                <input class="flex_col-desk--1-2" type="text" placeholder="Статья">
            </div>
            <div class="flex_col-tab--1-1 flex_col-desk--1-3 form-block">
                <textarea placeholder="Ваше сообщение" id="textArea-connect" rows="1"></textarea>
            </div>
            <div class="form-block flex_col--1-1">
                <button type="submit">Отправить</button>
            </div>
        </form> -->
    </div>
</section>
<?php get_footer(); ?>