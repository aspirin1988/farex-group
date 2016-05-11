
<div class="about">
	<div class="container-fluid row-about row-production">
		<div class="row about-figure">
			<div class="col-md-4 figure"></div>
			<div class="col-md-4 text-figure"><?php the_title() ?></div>
			<div class="col-md-4 figure"></div>
		</div>
	</div>

	<div class="container">
		<div class="row row-product-text">
			<div class="col-md-4">
				<img class="img-production" src="<?php the_post_thumbnail_url() ?>" alt="">
			</div>
			<div class="col-md-8 description-product">
				<p>
					Описание
				</p>
				<?php echo get_the_content()?>
			</div>
		</div>

		<div class="row">
			<?php echo get_the_excerpt();   ?>
	</div>
</div>