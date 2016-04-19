
<?php

$categories = get_category_by_slug('catalog');
$args = array(
	'type'         => 'post',
	'child_of'     => $categories->term_id,
	'parent'       => '',
	'orderby'      => 'ID',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'taxonomy'     => 'category',
	'pad_counts'   => false,
	// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
);
$categories = get_categories( $args );
$current_cat =$wp_query->query_vars['page'];
if ($current_cat==0) : $current_cat=$categories[0]->term_id; endif;
?>

<!-- Под-меню -->

<div class="center-block text-contact">
	<?php the_title(); ?>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default menu center-block sub-menu">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav sub-nav">
						<?php  foreach($categories as $value) : ?>
							<li <?php if ($current_cat==$value->term_id): echo 'class="active"'; endif; ?> ><a href="/catalog/<?=$value->term_id;?>"><?=$value->name?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>

<!-- Продукция -->

<div class="container">
	<div class="row row-production">
		<?php $categories=get_posts([ 'cat'=>$current_cat ,'numberposts'=>20, ]); ?>
		<?php   foreach($categories as $value) : ?>
		<div class="col-md-4">
			<div class="thumbnail recomendation-block center-block">
				<img src="<?php echo get_the_post_thumbnail_url($value->ID);?>" alt="recomendation-block">
				<div class="caption">
					<h3 class="head-rec"><?php echo $value->post_title; ?></h3>
					<p class="text-rec"><?php echo mb_substr($value->post_content,0,128); ?>...</p>
					<p class="text-center"><a class="link-rec" href="<?php the_permalink($value->ID); ?>" class="" >Подробней></a></p>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

</div>