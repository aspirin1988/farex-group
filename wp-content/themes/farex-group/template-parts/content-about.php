<div class="about">
		<div class="col-md-12">
			<p class="contacts-logo"><?php the_title()?></p>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-logo">
				<img class="logo-img-about" src="<?php echo get_the_post_thumbnail_url() ?>" alt="about">
				<img class="blue-triangle" src="<?php the_field('header-logo') ?>" alt="blue-triangle">
				<p class="logo-devise">
					На рынке с 2012 года
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid row-about">
		<div class="row about-figure">
			<div class="col-md-5 figure"></div>
			<div class="col-md-2 text-figure"><?php the_title()?></div>
			<div class="col-md-5 figure"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="about-description">
					<?php echo get_the_content()?>
				</p>
			</div>
		</div>
	</div>
</div>