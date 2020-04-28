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
			<span>Страница не найдена</span>
			<p>Старница, на которую вы пытаетесь перейти временно не доступна.  Попробуйте перезагрузить страницу, или вернитесь на главную</p>
			<a href="#">Вернуться на главную</a>
		</div>
	</div>

<?php get_footer();