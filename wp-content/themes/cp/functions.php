<?php
/**
 * cp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cp
 */

if ( ! function_exists( 'cp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cp, use a find and replace
		 * to change 'cp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cp_content_width', 640 );
}
add_action( 'after_setup_theme', 'cp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



//  animate start


function cp_scripts() {
	wp_enqueue_style( 'cp-style', get_stylesheet_uri() );
	wp_enqueue_style('wp_play_style', get_stylesheet_directory_uri().'/styles/styles.min.css');

	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('jquery');
}

// animate end


register_post_type('settings', array(
    'labels'             => array(
      'name'               => 'Главные настройки',
      'singular_name'      => 'Главные настройки',
      'add_new'            => 'Добавить настройку',
      'add_new_item'       => 'Добавить новую настройку',
      'edit_item'          => 'Редактировать настройку',
      'new_item'           => 'Новая настройку',
      'view_item'          => 'Посмотреть настройку',
      'search_items'       => 'Найти настройку',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Главные настройки'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));



pll_register_string('Обратная связь', 'callback');
pll_register_string('Просмотров', 'views');
pll_register_string('Копирайтинг', 'copyright');
pll_register_string('Часто ищут', 'search');
pll_register_string('Поиск по', 'searchPlaceholder');
pll_register_string('статей', 'searchlast');
pll_register_string('Cвяжитесь с нами', 'callText');
pll_register_string('Читать статью полностью', 'readArea');
pll_register_string('Популярные статьи', 'popular');
pll_register_string('2 тыс', 'two');
pll_register_string('Статей написано', 'readArticles');
pll_register_string('Текст главная', 'textArticles');
pll_register_string('Полезные материалы', 'youtubeMaterial');
pll_register_string('Посетить канал', 'seeChanel');
pll_register_string('Развернуть', 'seeMore');
pll_register_string('Свернуть', 'cancelMore');
pll_register_string('Подробнее о нас', 'aboutUs');
pll_register_string('Автор статьи', 'author');
pll_register_string('Поделиться статьей:', 'shareItem');
pll_register_string('Следующая статья', 'nextArticle');
pll_register_string('Предыдущая статья', 'prevArticle');
pll_register_string('Появились вопросы', 'questions');
pll_register_string('Задать вопрос', 'tellQuestions');
pll_register_string('Читайте также в этой категории', 'readAlso');
pll_register_string('По Вашему запросу найдено', 'postArticle');
pll_register_string('результата', 'result');
pll_register_string('Результаты поиска', 'resultSearch');
pll_register_string('Ничего не найдено', 'noSearch');
pll_register_string('Извините, но ничего не соответствует вашим критериям поиска.', 'noSearchText');
pll_register_string('Мы всегда рады видеть и слышать своих единомышленников', 'contactText');
pll_register_string('Назад', 'back');




/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

global $user_ID, $post;
	if(is_singular()) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; // чтобы 1 раз за поток
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}

		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}


 //РЕКОМЕНДОВАННЫЕ
 function recommend() {
 	$categories = get_the_category($post->ID);
 	if ($categories) {
 		$category_ids = array();
 		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
 		$args=array(
 			'category__in' => $category_ids,
 			'post__not_in' => array($post->ID),
 			'showposts'=>5,
 			'caller_get_posts'=>1
 		);
 		$my_query = new wp_query($args);
 		if( $my_query->have_posts() ) {
 			echo '<ul>';
 			while ($my_query->have_posts()) {
 				$my_query->the_post();
 			?>
			
 			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			
			<?php
 			}
 			echo '</ul>';
 		}
 		wp_reset_query();
 	}
 };






// ПРОСМОТРЫ
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Просмотры');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
        if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}


add_action('wp_head', 'show_template'); // перед шапкой
// add_action('wp_footer', 'show_template'); // в подвале
function show_template(){
  global $template;
  echo $template;
}





// Хлебные крошки

function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home'] = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search'] = '"%s"'; // текст для страницы с результатами поиска
	$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author'] = 'Статьи автора %s'; // текст для страницы автора
	$text['404'] = 'Ошибка 404'; // текст для страницы 404
	$text['page'] = 'Страница %s'; // текст 'Страница N'
	$text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
  
	$wrap_before = '<div class="page-single__links top-nav__links" itemscope>'; // открывающий тег обертки
	$wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep = ''; // разделитель между "крошками"
	$sep_before = ''; // тег перед разделителем
	$sep_after = ''; // тег после разделителя
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$before = '<span class="current">'; // тег перед текущей "крошкой"
	$after = '</span>'; // тег после текущей "крошки"
	/* === КОНЕЦ ОПЦИЙ === */
  
	global $post;
	$home_url = home_url('/');
	$link_before = '';
	$link_after = '';
	$link_attr = ' itemprop="item"';
	$link_in_before = '';
	$link_in_after = '';
	$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id = get_option('page_on_front');
	$parent_id = ($post) ? $post->post_parent : '';
	$sep = ' ' . $sep_before . $sep . $sep_after . ' ';
	$home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
  
	if (is_home() || is_front_page()) {
  
	  if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
  
	} else {
  
	  echo $wrap_before;
	  if ($show_home_link) echo $home_link;
  
	  if ( is_category() ) {
		$cat = get_category(get_query_var('cat'), false);
		if ($cat->parent != 0) {
		  $cats = get_category_parents($cat->parent, TRUE, $sep);
		  $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  if ($show_home_link) echo $sep;
		  echo $cats;
		}
		if ( get_query_var('paged') ) {
		  $cat = $cat->cat_ID;
		  echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
		}
  
	  } elseif ( is_search() ) {
		if (have_posts()) {
		  if ($show_home_link && $show_current) echo $sep;
		  if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
		} else {
		  if ($show_home_link) echo $sep;
		  echo $before . sprintf($text['search'], get_search_query()) . $after;
		}
  
	  } elseif ( is_day() ) {
		if ($show_home_link) echo $sep;
		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
		echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
		if ($show_current) echo $sep . $before . get_the_time('d') . $after;
  
	  } elseif ( is_month() ) {
		if ($show_home_link) echo $sep;
		echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
		if ($show_current) echo $sep . $before . get_the_time('F') . $after;
  
	  } elseif ( is_year() ) {
		if ($show_home_link && $show_current) echo $sep;
		if ($show_current) echo $before . get_the_time('Y') . $after;
  
	  } elseif ( is_single() && !is_attachment() ) {
		if ($show_home_link) echo $sep;
		if ( get_post_type() != 'post' ) {
		  $post_type = get_post_type_object(get_post_type());
		  $slug = $post_type->rewrite;
		  printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
		  if ($show_current) echo $sep . $before . get_the_title() . $after;
		} else {
		  $cat = get_the_category(); $cat = $cat[0];
		  $cats = get_category_parents($cat, TRUE, $sep);
		  if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  echo $cats;
		  if ( get_query_var('cpage') ) {
			echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
		  } else {
			if ($show_current) echo $before . get_the_title() . $after;
		  }
		}
  
	  // custom post type
	  } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type_object(get_post_type());
		if ( get_query_var('paged') ) {
		  echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . $post_type->label . $after;
		}
  
	  } elseif ( is_attachment() ) {
		if ($show_home_link) echo $sep;
		$parent = get_post($parent_id);
		$cat = get_the_category($parent->ID); $cat = $cat[0];
		if ($cat) {
		  $cats = get_category_parents($cat, TRUE, $sep);
		  $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
		  echo $cats;
		}
		printf($link, get_permalink($parent), $parent->post_title);
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_page() && !$parent_id ) {
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_page() && $parent_id ) {
		if ($show_home_link) echo $sep;
		if ($parent_id != $frontpage_id) {
		  $breadcrumbs = array();
		  while ($parent_id) {
			$page = get_page($parent_id);
			if ($parent_id != $frontpage_id) {
			  $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
			}
			$parent_id = $page->post_parent;
		  }
		  $breadcrumbs = array_reverse($breadcrumbs);
		  for ($i = 0; $i < count($breadcrumbs); $i++) {
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo $sep;
		  }
		}
		if ($show_current) echo $sep . $before . get_the_title() . $after;
  
	  } elseif ( is_tag() ) {
		if ( get_query_var('paged') ) {
		  $tag_id = get_queried_object_id();
		  $tag = get_tag($tag_id);
		  echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
		}
  
	  } elseif ( is_author() ) {
		global $author;
		$author = get_userdata($author);
		if ( get_query_var('paged') ) {
		  if ($show_home_link) echo $sep;
		  echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
		} else {
		  if ($show_home_link && $show_current) echo $sep;
		  if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
		}
  
	  } elseif ( is_404() ) {
		if ($show_home_link && $show_current) echo $sep;
		if ($show_current) echo $before . $text['404'] . $after;
  
	  } elseif ( has_post_format() && !is_singular() ) {
		if ($show_home_link) echo $sep;
		echo get_post_format_string( get_post_format() );
	  }
  
	  echo $wrap_after;
  
	}
  } // end of dimox_breadcrumbs()
  








// AJAX загрузка постов 
function load_posts () {
    $args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 2; // следующая страница 
	$args['posts_per_page'] = 3; // по сколько записей подгружать
	
    query_posts( $args );
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();
			?>

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
        die();
    }
}
add_action('wp_ajax_loadmore', 'load_posts');
add_action('wp_ajax_nopriv_loadmore', 'load_posts');