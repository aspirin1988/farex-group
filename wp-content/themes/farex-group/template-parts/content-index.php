<?php $slider=get_gall('slider'); ?>
<div class="container-fluid main">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php  /*print_r($slider);*/ foreach($slider as $key=> $val): ?>
			<li data-target="#carousel-example-generic" data-slide-to="0" class="<?php if (!$key) echo 'active';  ?>"></li>
			<?php endforeach; ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php  /*print_r($slider);*/ foreach($slider as $key=> $val): ?>
				<div class="item <?php if (!$key) echo 'active';  ?>">
					<img class="carousel-item" src="<?=$val['path'];?>" alt="content1">
					<div class="carousel-caption custom-caption">
						<p>&#8220; <?=$val['img_title'];?> &#8221;</p>
						<p>
						<!--	<?php /*if (!$key) : */?><img class="image-caption" src="<?php /*bloginfo('template_directory') */?>/public/img/fanera.png" alt="fanera">--><?php /*endif;*/?>
						<p class="text-sub-caption">
							<?=$val['caption1'];?>
						</p>
						</p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		</a>
	</div>

	<!-- контент -->

	<div class="content">
		<div class="row">
			<div class="col-md-5 figure"></div>
			<div class="col-md-2 text-figure">О НАС</div>
			<div class="col-md-5 figure"></div>
		</div>
		<?php $about=get_page_by_path('about');?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-content">
				<?php echo $about->post_content?>
				<div class="details">
					<a class="link-details" href="/about">Подробней</a>
				</div>
			</div>
		</div>

	</div>

	<!-- продукция -->

	<div class="production">
		<div class="row">
			<div class="col-md-5 figure"></div>
			<div class="col-md-2 text-figure">Наша продукция</div>
			<div class="col-md-5 figure"></div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$categories=get_category_by_slug('lider');
				$categories=get_posts([ 'cat'=>$categories->term_id ,'numberposts'=>2, ]); ?>
				<?php   foreach($categories as $value) : ?>
				<div class="col-md-6">
					<h3><?=$value->post_title ?></h3>
					<img class="big-news" src="<?=get_the_post_thumbnail_url($value->ID) ?>" alt="big-news">
					<p class="text-news">
						<?=mb_substr($value->post_content,0,128).'...' ?>
					</p>
					<p class="link-news">
						<a href="<?php the_permalink($value->ID) ?>">Подробней ></a>
					</p>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="row row-small">
				<?php $categories=get_category_by_slug('production');
				$categories=get_posts([ 'cat'=>$categories->term_id ,'numberposts'=>4, ]); ?>
				<?php   foreach($categories as $value) : ?>
				<div class="col-md-3">
					<div class="small-news">
						<img src="<?=get_the_post_thumbnail_url($value->ID) ?>" alt="<?=$value->post_title ?>">
						<!--<div class="small-link">
							<a href="<?php /*the_permalink($value->ID) */?>">Подробней</a>
						</div>-->
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col-md-12 line-end">
				</div>
			</div>
		</div>
	</div>

	<!-- девиз -->

	<div class="row">
		<div class="col-md-12 devise">
			<img src="<?php bloginfo('template_directory') ?>/public/img/business.png" alt="business">
			<p>
				<?=get_field('devise1',4) ?>
			</p>
		</div>
	</div>

	<div class="container">
		<form class="form blink-mailer">
			<input style="display: none" type="text" name="title" value="ОБРАТНАЯ СВЯЗЬ">
			<div class="row">
				<div class="col-md-8">
					<div class="form-text">
						<h2>ОБРАТНАЯ СВЯЗЬ</h2>
						<p>*оставьте номер, и мы Вам перезвоним</p>
					</div>
					<div class="form-control-custom">
						<input name="Ф.И.О." type="text" placeholder="Ф.И.О.">
						<input name="ТЕЛЕФОН" type="text" placeholder="ТЕЛЕФОН">
					</div>
					<input type="submit" value="ОТПРАВИТЬ">
				</div>
			</div>
		</form>
	</div>

