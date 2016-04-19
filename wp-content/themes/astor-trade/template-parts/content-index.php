<!-- Хедер картинка и девиз -->

<div class="container-fluid container-image">
	<div class="devise"><?php the_field('devise') ?></div>
	<img class="img_header" src="<?php the_field('header',8) ?>" alt="header_image">
</div>

<!-- Описание -->

<div class="container-fluid container-description">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="brick-image">
					<img class="image-desc" src="<?php echo get_the_post_thumbnail_url() ?>" alt="brick">
				</p>
			</div>
			<div class="col-md-8">
				<p class="description">
					<?php the_content() ?>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Рекомендации/слайдер-->

<div class="container">
	<p class="recomendation">
		РЕКОМЕНДУЕМ
	</p>
	<div class="row">
		<div class="col-md-1">
			<span id="prev" class="glyphicon glyphicon-chevron-left left"></span>
		</div>
		<div class="col-md-10 block-slider ">
			<div class="owl-carousel ">
				<?php $cat=get_category_by_slug('recommended');
				$post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>20, 'order'=> 'ASC'));?>
				<?php foreach($post as $key=>$value): ?>
				<div class="thumbnail recomendation-block center-block">
					<img src="<?php echo get_the_post_thumbnail_url($value->ID); ?>" alt="recomendation-block">
					<div class="caption">
						<h3 class="head-rec"><?=$value->post_title?></h3>
						<p class="text-rec"><?=$value->post_content?></p>
						<p class="text-center"><a class="link-rec" href="<?=get_permalink($value->ID)?>" class="" >Подробней></a></p>
					</div>
				</div></li>
				<?php endforeach; ?>

			</div>
		</div>
		<div  class="col-md-1">
			<span id="next" class="glyphicon glyphicon-chevron-right right"></span>
		</div>
	</div>
</div>

<!-- префуте -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<img class="center-block" src="<?php bloginfo('template_directory') ?>/public/img/transport.png" alt="transport">
			<p class="delivery">
				Организация доставки на объект
			</p>
			<p class="delivery">
				Доставка осуществляется только при предоплате
			</p>
		</div>
		<?php the_field('description',8); ?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>
</div>
</div>