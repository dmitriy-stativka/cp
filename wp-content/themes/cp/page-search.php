<?php
/*
Template Name: page-search
*/
 get_header(); ?>


<section class="page-top page-menu-search">   
    <div class="page__container">
        <a class="back" href=""> <span class="left-arrow"></span> Назад</a>
        <div class="top-nav__links page-menu-sub__links">
            <a href="">Главная</a>
            <a href="">Позиції</a>
            <a href="">Корпоративне право</a>
        </div>
        <h1 class="page-title page-menu-sub__title">
            Результаты поиска
        </h1>
    </div>
</section>

<section class="page-search__main">

    <div class="search-top">
        <span>
            По Вашему запросу найдено 44 результата
        </span>
        <div class="search-block-line">
            <?php
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;
            ?>

            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder='<?php pll_e('searchPlaceholder'); ?> <?php echo $published_posts;?> <?php pll_e('searchlast'); ?>' />
                <button>
                    <svg class="icon"><use xlink:href="#search"></svg>
                </button>
                <input type="submit" id="searchsubmit" value="">
            </form>

        </div>
    </div>
    <div class="search-center">
    <div class="page-menu__content-blocks">         
            <div class="page-menu__content-blocks-items">                      

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

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
                </a>

            </div>         
        </div>
    </div>

</section>


<?php get_footer(); ?>