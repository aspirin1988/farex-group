<div class="center-block text-contact">
	<?php the_title(); ?>
</div>

<!-- Описание компании-->

<div class="container">
	<div class="row images center-block">
		<div class="col-md-12">
			<img class="image-logo" src="<?php the_field('header'); ?>" alt="company">
			<div class="text-about">
				<div>
					<?php the_field('devise') ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>
	<div class="row center-block">
		<div class="col-md-10 col-md-offset-1 text-about-post">
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
</div>
