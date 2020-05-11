<?php
/**
 Template Name: 404-page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cp
 */
	get_header();
?>

	<div class="error-page">
		<div class="error-page__404">
			<span>404</span>	
		</div>
		<div class="error-page__link">
			<span><?php pll_e('errorTitile'); ?></span>
			<p><?php pll_e('errorText'); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php pll_e('returnGeneral'); ?></a>
		</div>
	</div>

<?php get_footer();