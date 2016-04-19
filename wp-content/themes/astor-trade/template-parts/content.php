<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package astor-trade
 */
$current_post = get_posts();
?>

<div class="center-block text-contact">
	<?php  the_title()?>
</div>

<!-- Описание компании-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<img class="img-production" src="<?php echo get_the_post_thumbnail_url($current_post->ID) ?>" alt="">
		</div>
		<div class="col-md-8 text-production">
			<?php the_content() ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>
</div>
