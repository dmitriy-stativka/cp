<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */
?>

<?php wp_reset_query(); ?>
	<footer class="footer">
		<div class="footer-container">
			<div class="flex_col-desk top-footer">
				<div class="flex_col-desk--1-5 flex_col--1-1 footer-logo">
					<?php the_custom_logo();?>
				</div>
				<div class="flex_col-desk--4-5 footer-menu_block">

					<?php
						$рarent_categories = get_categories( 'orderby=name&order=ASC' );
						foreach ( $рarent_categories as $category ){
							if ( $category->parent < 1 ) {
								$rl_category_color = rl_color($category->cat_ID);
								echo '<ul class="flex_col-desk--1-6">';

								echo '<li><a href="'.get_category_link($category).'" >'.$category->name.'</a></li>';       
								$childless_categories = get_categories( array( 'parent' => $category->term_id ));

								foreach ( $childless_categories as $childless ){
									echo '<li><a href="'.get_category_link($childless).'">'.$childless->name.'</a></li>';
								}
								echo '</ul>';
							}
						}
					?>

				</div>
			</div>
			<div class="flex_col-desk bottom-footer">
				<ul class="flex_col--1-1 flex_col-desk--1-5 footer-icons">
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#inst" /></svg></a>
					</li>
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#telegram" /></svg></a>
					</li>
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#youtube" /></svg></a>
					</li>
				  </ul>
				  <div class="flex_col--1-1 flex_col-desk--4-5 footer-bottom__right-block">

					<?php 
						$pages = get_pages(); 
						foreach( $pages as $page ){
							echo '<a class="flex_col-desk--1-6" href="' . get_page_link( $page->ID ) . '">'. esc_html($page->post_title) .'</a>';
						}
					?>

					<div class="flex_col-desk--1-6 empty"></div>
					<span class="flex_col-desk--1-3"><?php pll_e('copyright'); ?></span>
				  </div>				 
			</div>
		</div>

		<!-- search block (invisible). After click on search-btn becomes visible-->
		<div class="nav-tools__search-block_click">
		<div class="search-block_click-container">
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
			<div class="search-block-links">
			<div><span><?php pll_e('search'); ?></span></div>
			<div>
				<?php recommend();?>
			</div>
			</div>
		</div>
		</div>
		<!-- end of search block -->

		<!-- Burger-menu onclick block -->
		<div class="burger-menu__block">
		<div class="burger-menu__container">
			<div class="burger-menu__lists">
				<?php
					$рarent_categories = get_categories( 'orderby=name&order=ASC' );
					foreach ( $рarent_categories as $category ){
						if ( $category->parent < 1 ) {
							$rl_category_color = rl_color($category->cat_ID);
							echo '<ul class="flex_col-desk--1-3 burger-menu__lists-item">';

							echo '<li><a href="'.get_category_link($category).'"  style="color: '.$rl_category_color.';">'.$category->name.'</a></li>';       
							$childless_categories = get_categories( array( 'parent' => $category->term_id ));

							foreach ( $childless_categories as $childless ){
								echo '<li><a href="'.get_category_link($childless).'">'.$childless->name.'</a></li>';
							}
							echo '</ul>';
						}
					}
				?>
			</div>
			<div class="burger-menu__right-block">
			<ul class="burger-menu__right-block-top_list">
			
				<?php
					$array = array(
					'authors'      => '',
					'child_of'     => 0, 
					'date_format'  => get_option('date_format'),
					'depth'        => 0, 
					'echo'         => 1, 
					'exclude'      => '',
					'include'      => '', 
					'link_after'   => '', 
					'link_before'  => '', 
					'post_type'    => 'page',
					'post_status'  => 'publish', 
					'show_date'    => '', 
					'sort_column'  => 'menu_order, post_title', 
							'sort_order'   => '', 
					'title_li'     => __(''), 
					);
					wp_list_pages($array)
				?>


			</ul>
			<div class="burger-menu__right-block-bottom_list">

				<span>Cвяжитесь с нами</span>

				<span>
					<a href="tel:+38 (066) 521-54-24">+38 (066) 521-54-24</a>
				</span>


				<?php
						$params = array(
							'post_type' => 'capabilities',
							'posts_per_page' => 3
						);
						$query = new WP_Query( $params );
						?>
						<?php if($query->have_posts()): ?>
							<?php $number = 0; ?>
							<?php while ($query->have_posts()): $query->the_post() ?>
								<?php $title_capabilities = get_field('title_capabilities'); 
									$number++;
								?>

								<li class="capabilities-item">
									<a>0<?php echo $number;?>. <?php echo $title_capabilities;?></a>
								</li>
								
								<?php endwhile; ?>
						<?php endif; 
					?>

				<span>
					<a href="mailto:Info@civliplatform.com">Info@civliplatform.com</a>
				</span>


				<ul>
				<li class="bottom_list__icons">
					<a href="#"
					><svg class="icon"><use xlink:href="#inst" /></svg>
					</a>
				</li>
				<li class="bottom_list__icons">
					<a href="#"
					><svg class="icon"><use xlink:href="#telegram" /></svg>
					</a>
				</li>
				<li class="bottom_list__icons">
					<a href="#"
					><svg class="icon"><use xlink:href="#youtube" /></svg>
					</a>
				</li>
				</ul>
				<ul>
				<li class="language"><a href="">UA</a></li>

				<li class="change">
					<span class="right-arrow"></span>
					<span class="left-arrow"></span>
				</li>

				<li class="language current-lang"><a href="">RU</a></li>

				<li class="change">
					<span class="right-arrow"></span>
					<span class="left-arrow"></span>
				</li>

				<li class="language"><a href="">EN</a></li>
				</ul>
			</div>
			</div>
		</div>
		</div>
		<!-- End of Burger-menu onclick block -->




		<div class="popup__overlay">
			<span class="popup__close"><span></span></span>
		  <div class="popup">
			<h1>
				Появились вопросы?
				Задайте их профессионалу
			</h1>
			<form action="">
				<input type="text" placeholder="Имя*" required>
				<input type="email" placeholder="Email*" required>
				<input type="text" placeholder="Тема">
				<input type="text" placeholder="Статья">
				<textarea placeholder="Ваше сообщение" id="textArea-connect" rows="1"></textarea>
				<button type="submit">Отправить</button>
			</form>
		</div>
	  </div>
	  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">     

		<symbol id="search" viewBox="0 0 23 23">
		  <path
			fill="#fff"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		  <path
			fill="none"
			stroke="#fff"
			stroke-miterlimit="50"
			stroke-width=".5"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		</symbol>

		<symbol id="inst" viewbox="0 0 17 17">
			<path fill="#fff" d="M15.033 11.945a3.092 3.092 0 0 1-3.089 3.088H4.553a3.092 3.092 0 0 1-3.09-3.088V4.553a3.092 3.092 0 0 1 3.09-3.09h7.391a3.092 3.092 0 0 1 3.09 3.09v7.392zM11.944 0H4.553A4.558 4.558 0 0 0 0 4.553v7.392a4.558 4.558 0 0 0 4.553 4.552h7.391a4.558 4.558 0 0 0 4.553-4.552V4.553A4.558 4.558 0 0 0 11.944 0z"/><path fill="#fff" d="M8.249 11.036A2.79 2.79 0 0 1 5.46 8.249 2.79 2.79 0 0 1 8.25 5.462a2.79 2.79 0 0 1 2.787 2.787 2.79 2.79 0 0 1-2.787 2.787zm0-7.038a4.256 4.256 0 0 0-4.251 4.25 4.256 4.256 0 0 0 4.25 4.251A4.256 4.256 0 0 0 12.5 8.25a4.256 4.256 0 0 0-4.25-4.251z"/><path fill="#fff" d="M12.678 2.757a1.078 1.078 0 0 0-1.074 1.073c0 .282.115.56.315.76.2.198.477.314.759.314.283 0 .559-.116.759-.315a1.078 1.078 0 0 0 0-1.518c-.2-.2-.476-.314-.76-.314z"/>
		</symbol>

		<symbol id="telegram" viewbox="0 0 18 15">
			<path fill="#fff" d="M14.369 3.53L7.247 9.829a.382.382 0 0 0-.127.244l-.274 2.438c-.009.08-.12.09-.144.013L5.574 8.888a.383.383 0 0 1 .164-.438l8.41-5.216c.193-.12.391.146.22.297zM16.29.754L.959 6.728a.56.56 0 0 0 .044 1.057L4.9 8.935l1.454 4.615a.67.67 0 0 0 1.117.267l2.014-2.057 3.952 2.9a.825.825 0 0 0 1.296-.495L17.349 1.65a.789.789 0 0 0-1.058-.897z"/>
		</symbol>

		<symbol id="youtube" viewbox="0 0 18 13">
			<path fill="#fff" d="M11.707 6.762L8.09 8.652a.556.556 0 0 1-.813-.493V4.39a.556.556 0 0 1 .812-.494l3.617 1.878a.556.556 0 0 1 0 .987zm5.5-5.437C16.583.585 15.434.284 13.24.284H5.277c-2.244 0-3.413.321-4.032 1.108C.64 2.16.64 3.292.64 4.857v2.985c0 3.033.717 4.573 4.637 4.573h7.964c1.903 0 2.957-.266 3.64-.919.699-.67.997-1.762.997-3.654V4.857c0-1.65-.047-2.789-.672-3.532z"/>
		</symbol>

		<symbol id="letter" viewbox="00 0 24 18">
			<path fill="#fff" d="M21.56 14.52a1.44 1.44 0 0 1-1.44 1.438H3.75a1.44 1.44 0 0 1-1.438-1.439V3.336a1.44 1.44 0 0 1 1.439-1.44h16.365a1.44 1.44 0 0 1 1.439 1.44v11.183zM20.12.681H3.75a2.651 2.651 0 0 0-2.649 2.65v11.187a2.651 2.651 0 0 0 2.65 2.65h16.365a2.651 2.651 0 0 0 2.65-2.65V3.336A2.649 2.649 0 0 0 20.12.682z"/><path fill="none" stroke="#fff" stroke-miterlimit="20" stroke-width=".8" d="M21.56 14.52a1.44 1.44 0 0 1-1.44 1.438H3.75a1.44 1.44 0 0 1-1.438-1.439V3.336a1.44 1.44 0 0 1 1.439-1.44h16.365a1.44 1.44 0 0 1 1.439 1.44v11.183zM20.12.681H3.75a2.651 2.651 0 0 0-2.649 2.65v11.187a2.651 2.651 0 0 0 2.65 2.65h16.365a2.651 2.651 0 0 0 2.65-2.65V3.336A2.649 2.649 0 0 0 20.12.682z"/><path fill="#fff" d="M14.764 8.786l5.298-4.751a.608.608 0 0 0 .045-.856.608.608 0 0 0-.856-.045l-7.306 6.558-1.426-1.273c-.004-.005-.009-.01-.009-.014a.899.899 0 0 0-.098-.085l-5.8-5.19a.604.604 0 0 0-.857.049.604.604 0 0 0 .05.856l5.36 4.792-5.338 4.998a.608.608 0 0 0 .829.887l5.42-5.07 1.47 1.314a.605.605 0 0 0 .806-.005l1.511-1.353 5.388 5.119a.605.605 0 0 0 .834-.879z"/><path fill="none" stroke="#fff" stroke-miterlimit="20" stroke-width=".8" d="M14.764 8.786v0l5.298-4.751a.608.608 0 0 0 .045-.856.608.608 0 0 0-.856-.045l-7.306 6.558v0l-1.426-1.273c-.004-.005-.009-.01-.009-.014a.899.899 0 0 0-.098-.085l-5.8-5.19a.604.604 0 0 0-.857.049.604.604 0 0 0 .05.856l5.36 4.792v0l-5.338 4.998a.608.608 0 0 0 .829.887l5.42-5.07v0l1.47 1.314a.605.605 0 0 0 .806-.005l1.511-1.353v0l5.388 5.119a.605.605 0 0 0 .834-.879z"/>
		</symbol>

		<symbol id="left-arrow" viewbox="0 0 30 13">
			<path fill="none" stroke="#2863a7" stroke-miterlimit="20" stroke-width="2" d="M2.059 6.673h27.656"/><path fill="none" stroke="#2863a7" stroke-miterlimit="20" stroke-width="2" d="M7.022 12.346v0L1.35 6.673v0L7.022 1v0"/>
		</symbol>

		<symbol id="right-arrow" viewbox="0 0 30 13">
			<path fill="none" stroke="#2863a7" stroke-miterlimit="20" stroke-width="2" d="M28.29 6.673H.636"/><path fill="none" stroke="#2863a7" stroke-miterlimit="20" stroke-width="2" d="M23.327 12.346v0L29 6.673v0L23.327 1v0"/>
		</symbol>

		<symbol id="black-letter" viewbox="0 0 83 64">
			<path d="M77.931 53.21a5.487 5.487 0 0 1-5.481 5.48H10.091a5.487 5.487 0 0 1-5.48-5.48V10.607a5.487 5.487 0 0 1 5.48-5.481h62.342a5.487 5.487 0 0 1 5.481 5.481V53.21zM10.091.499C4.525.499 0 5.024 0 10.59v42.62C0 58.776 4.525 63.3 10.091 63.3h62.342c5.566 0 10.091-4.525 10.091-10.091V10.607C82.541 5.041 78.017.5 72.45.5z"/><path d="M52.045 31.37l20.183-18.1a2.316 2.316 0 0 0 .17-3.26 2.316 2.316 0 0 0-3.26-.171l-27.833 24.98-5.43-4.849c-.017-.017-.034-.034-.034-.05-.12-.12-.24-.223-.376-.325L13.37 9.822a2.302 2.302 0 0 0-3.261.188 2.302 2.302 0 0 0 .187 3.26l20.422 18.254-20.336 19.04a2.315 2.315 0 0 0-.103 3.26 2.358 2.358 0 0 0 1.69.735 2.31 2.31 0 0 0 1.572-.615l20.644-19.312 5.6 5.003a2.304 2.304 0 0 0 3.074-.017l5.754-5.157 20.524 19.5a2.29 2.29 0 0 0 1.588.632c.615 0 1.213-.24 1.674-.717.87-.922.836-2.39-.086-3.262z"/>
		</symbol>

		<symbol id="yellow-inst" viewbox="0 0 20 20">
			<path fill="#efc066" d="M17.752 14.104a3.652 3.652 0 0 1-3.648 3.648H5.376a3.651 3.651 0 0 1-3.648-3.648V5.376a3.652 3.652 0 0 1 3.648-3.648h8.728a3.652 3.652 0 0 1 3.648 3.648v8.728zM14.104 0H5.376A5.382 5.382 0 0 0 0 5.376v8.728a5.382 5.382 0 0 0 5.376 5.376h8.728a5.382 5.382 0 0 0 5.376-5.376V5.376A5.382 5.382 0 0 0 14.104 0z"/><path fill="#efc066" d="M9.74 13.031a3.295 3.295 0 0 1-3.291-3.29 3.295 3.295 0 0 1 3.29-3.292 3.295 3.295 0 0 1 3.292 3.291 3.295 3.295 0 0 1-3.291 3.291zm0-8.31a5.025 5.025 0 0 0-5.02 5.02 5.025 5.025 0 0 0 5.02 5.018 5.025 5.025 0 0 0 5.02-5.019 5.025 5.025 0 0 0-5.02-5.02z"/><path fill="#efc066" d="M14.97 3.255a1.272 1.272 0 0 0-1.268 1.268c0 .333.136.66.373.896.235.235.562.371.895.371.334 0 .66-.136.896-.37a1.273 1.273 0 0 0 0-1.793 1.273 1.273 0 0 0-.896-.372z"/>
		</symbol>

		<symbol id="blue-telegram" viewbox="0 0 21 18">
			<path fill="#589ce8" d="M17.114 4.169l-8.41 7.437a.452.452 0 0 0-.149.288l-.324 2.878c-.01.094-.141.106-.17.016L6.73 10.495a.452.452 0 0 1 .194-.517l9.93-6.16c.229-.141.463.173.261.351zm2.27-3.28L1.28 7.945c-.587.228-.551 1.07.052 1.248l4.6 1.358L7.65 16c.18.57.9.742 1.318.316l2.378-2.429 4.668 3.426a.974.974 0 0 0 1.53-.586l3.09-14.778a.931.931 0 0 0-1.25-1.059z"/>
		</symbol>

		<symbol id="red-ytb" viewbox="0 0 21 15">
			<path fill="#ed5152" d="M13.713 8.346l-4.27 2.232a.656.656 0 0 1-.961-.582v-4.45a.657.657 0 0 1 .96-.582l4.27 2.217a.657.657 0 0 1 .001 1.165zm6.494-6.42c-.735-.873-2.092-1.23-4.682-1.23H6.12c-2.65 0-4.029.38-4.761 1.31-.714.906-.714 2.242-.714 4.091v3.524c0 3.582.847 5.4 5.475 5.4h9.405c2.246 0 3.491-.314 4.297-1.085.826-.79 1.178-2.08 1.178-4.315V6.097c0-1.95-.055-3.293-.793-4.17z"/>
		</symbol>

		<symbol id="line" viewbox="0 0 2 21">
			<path fill="none" stroke="#787878" stroke-miterlimit="20" d="M1.5 0v21"/>
		</symbol>

		<symbol id="left-black__aroow" viewbox="0 0 22 10">
			<path fill="none" stroke="#232323" stroke-miterlimit="20" stroke-width="2" d="M1.84 5.011h19.5"/><path fill="none" stroke="#232323" stroke-miterlimit="20" stroke-width="2" d="M5.34 9.011v0l-4-4v0l4-4v0"/>
		</symbol>

		<symbol id="right-black__arrow" viewbox="0 0 22 10">
			<path fill="none" stroke="#232323" stroke-miterlimit="20" stroke-width="2" d="M19.5 5.011H0"/><path fill="none" stroke="#232323" stroke-miterlimit="20" stroke-width="2" d="M16 9.011v0l4-4v0l-4-4v0"/>
		</symbol>
		
	  </svg>
	</footer>

<?php wp_footer(); ?>

</div> 
<!-- wrapper end -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/wp-content/themes/cp/js/app.min.js"></script>


<script>
  $('.slider-nav .slider-nav__block:first-child').addClass('active-block');
  $('.slider-for .slider-for__container:first-child').addClass('content-active');

</script>

</body>
</html>