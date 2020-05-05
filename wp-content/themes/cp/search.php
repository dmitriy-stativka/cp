<?php
/*
Template Name: page-search
*/
 get_header(); ?>


<section class="page-top page-menu-search">   
    <div class="page__container">
        <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <span class="left-arrow"></span><?php pll_e('back'); ?></a>
        <div class="top-nav__links page-menu-sub__links">
            <?php include('templates/breadcrumbs.php');?>

        </div>
        <h1 class="page-title page-menu-sub__title"> <?php pll_e('resultSearch'); ?></h1>
    </div>
</section>

<section class="page-search__main">

    <div class="search-top">
        <span><?php pll_e('postArticle'); ?> <?php global $wp_query; echo $wp_query->found_posts;?> <?php pll_e('result'); ?></span>
        <div class="search-block-line">
            <?php
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;
            ?>

            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder='<?php pll_e('searchPlaceholder'); ?> <?php echo $published_posts;?> <?php pll_e('searchlast'); ?>' />
                <button>
                    <svg class="icon"><use xlink:href="#search-black"></svg>
                </button>
                <input type="submit" id="searchsubmit" value="">
            </form>

        </div>
    </div>
    <div class="search-center">
    <div class="page-menu__content-blocks">         
    
            <div class="page-menu__content-blocks-items">                      
                <!-- 
                <a href="#" class="flex_col-tab--1-2 flex_col-desk--1-4 main-content__block">
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
                </a> -->
                <?php
                    $s = get_search_query();
                    $args = array(
                        's' =>$s
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                           
                            while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                                    ?>
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
                                    <?php
                            }
                        }else{
                    ?>
                            <h2><?php pll_e('noSearch'); ?></h2>
                            <div class="alert alert-info">
                                <p><?php pll_e('noSearchText'); ?></p>
                            </div>
                    <?php } ?>
            </div>         
        </div>
    </div>
</section>

<?php get_footer(); ?>