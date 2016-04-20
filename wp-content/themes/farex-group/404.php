<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package farex-group
 */

get_header(); ?>

	<div class="container-fluid error-404">
		<div class="row">
			<div class="col-md-12 error-message">
				Ошибка 404. Данной страницы не существует.
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				Извините, но данной страницы не существует.
			</div>
		</div>
		<div class="row row-error">
			<div class="col-md-12">
				Перейдите на <a href="/">главную страницу</a> и повторите свой запрос.
			</div>
		</div>
	</div>

<?php
get_footer();
