<?php
/**
 Template Name: single-page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cp
 */
	get_header();
?>

<section class="page-top page-single">   
    <div class="page__container">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span> <?php pll_e('back'); ?></a>
        <div class="main-content-article-nav__container">
            <?php include('templates/breadcrumbs.php');?>
        </div>
    </div>
</section>

<section class="main-content-article">
    <div class="main-content-article__container">      
        <!-- <div class="flex_col-desk--1-4">
        </div> -->
        <div class="content-article__block-top">
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
            <h1><?php the_title(); ?></h1>
            <p><?php the_field('description');?></p>
            
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
    </div>

    <div class="content-article__img">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="main-content-article__container">
        <div class="content-article__main-block">
            <div class="flex_col-desk--1-4 article__main-block__left">
                <?php while ( have_rows('author') ) : the_row(); ?>
                    <?php $author_image = get_sub_field('author_image')["url"];
                        $author_name = get_sub_field('author_name');
                            
                        if($author_name){ ?>
                        
                                <div class="author-block">
                    
                                    <div class="user-img">
                                        <img class="" src="<?php echo $author_image;?>" alt="">
                                    </div>
                                    <h4><?php echo $author_name;?></h4>
                                    <span class="position"><?php pll_e('author'); ?></span>
                                    <span><?php pll_e('shareItem'); ?></span>
                                    <?php echo do_shortcode('[addtoany]');?>  

                                </div>

                          

                    <?php }
                    
                endwhile; ?>     
            </div>
                    <!-- 
                    <div class="author-block__contacts-links">
                        <a href="">
                            <svg class="icon"><use xlink:href="#yellow-inst" /></svg>
                        </a>
                        <a href="">
                            <svg class="icon"><use xlink:href="#blue-telegram" /></svg>
                        </a>
                        <a href="">
                            <svg class="icon"><use xlink:href="#red-ytb" /></svg>
                        </a>         
                    </div> -->
               
            <div class="flex_col-desk--3-4 article__main-block__right">
                <?php
                    wp_reset_postdata();
                    global $post;
                    the_content()
                ?>

                <?php $pdf_file = get_field('pdf_file')["url"];?>

                <?php
                    if($pdf_file){ ?>
                        <a class="pdfFile" target="_blank" href="<?php echo $pdf_file;?>"><?php pll_e('pdflink'); ?></a>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="main-content-article__container">

        <div class="flex_col-desk--1-4"></div>

        <div class="flex_col-desk--3-4 change-article__block">
            <?php    
                $next_post_obj  = get_adjacent_post( '', '', false );
                $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
                $next_post_link     = get_permalink( $next_post_ID );
                $next_post_title    = get_the_title($next_post_ID);

                $previous_post_obj  = get_adjacent_post( $in_same_cat = false, $excluded_categories = '', $previous = true );
                $previous_post_ID   = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
                $previous_post_link     = get_permalink( $previous_post_ID );
                $previous_post_title    = get_the_title($previous_post_ID);

                if($previous_post_obj) {?>
                    <a href="<?php echo $previous_post_link; ?>" class="change-article__block__link article-prev">
                        <span class="article__block__link-span">
                            <span><svg class="icon"><use xlink:href="#left-black__aroow"/></svg></span> 
                            <?php pll_e('prevArticle'); ?>
                        </span>
                        <span class="article__block__link-span"> <?php echo $previous_post_title; ?></span>
                        <div class="slider-nav__block-bottom">
                            <span><?php echo get_the_date('d.m.Y', $previous_post_ID); ?></span>
                            <span> <?php 
                                    if(get_post_meta ($previous_post_ID,'views',true)){
                                        echo get_post_meta ($previous_post_ID,'views',true);
                                    }else{
                                        echo '0';
                                    }?> <?php pll_e('views'); ?>
                            </span>
                        </div>
                    </a>
                <?php } 
                if($next_post_obj) { ?>
                    <a href="<?php echo $next_post_link; ?>" class="change-article__block__link article-next">
                        <span class="article__block__link-span">                            
                            <?php pll_e('nextArticle'); ?>
                            <span><svg class="icon"><use xlink:href="#right-black__arrow"/></svg></span> 
                        </span>
                        <span class="article__block__link-span"><?php echo $next_post_title; ?></span>
                        <div class="slider-nav__block-bottom">
                            <span><?php echo get_the_date('d.m.Y', $next_post_ID); ?></span>
                            <span> <?php 
                                    if(get_post_meta ($next_post_ID,'views',true)){
                                        echo get_post_meta ($next_post_ID,'views',true);
                                    }else{
                                        echo '0';
                                    }?> <?php pll_e('views'); ?>
                            </span>
                        </div>
                    </a>
                <?php } 
            ?>
        </div>
    </div>
    <!-- <div class="main-content-article__container">
        <div class="flex_col-desk--1-4"></div>
        <div class="flex_col-desk--3-4 flex_col--1-1 contact-article__block">
            <span><?php pll_e('questions'); ?></span>
            <a class="popup__toggle"><?php pll_e('tellQuestions'); ?></a>
        </div>
    </div> -->
</section>

<section class="bottom-content-article">
    <h2><?php pll_e('readAlso'); ?></h2>
    <div class="bottom-content__articles">
        <?php $posts = get_posts ("category=35&orderby=date&numberposts=4"); ?> 
        <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                <a href="<?php the_permalink(); ?>" class="flex_col-tab--1-2 flex_col-desk--1-4 main-content__block">         
                    <?php the_post_thumbnail(); ?>
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
        <?php endif; ?>
    </div>
</section>

<?php get_footer();