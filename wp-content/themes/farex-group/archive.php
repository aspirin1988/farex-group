<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package farex-group
 */

get_header(); ?>

<?php
get_header();
$page=16;
$category=get_category(get_query_var('cat'));
$cat_id='/category/'.$category->slug.'/';
$count_page=ceil($category->category_count/$page);
$offsett_post= $wp_query->query_vars['page']*$page;
$curent_page=$wp_query->query_vars['page'];
$args = array( 'cat'=> $category->term_id ,'numberposts'=>$page ,'offset'=>$offsett_post );
$categories=get_posts($args);
$temp=[];
$i=0;
foreach ($categories as $key=>$val)
{
	if (($key % 2)==0){$i++;}
	$temp[$i][]=$val;
}
$categories=$temp;
$sing=get_post(8);
?>

	<div class="about">
		<div class="row">
			<div class="col-md-12">
				<p class="contacts-logo"><?=$sing->post_title?></p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-logo">
					<img class="logo-img-about" src="<?php echo get_the_post_thumbnail_url(8)?>" alt="production">
					<img class="blue-triangle" src="<?php the_field('header-logo',8)?>" alt="fanera-logo">
					<p class="fanera-devise">
						<?php  echo $sing->post_content; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid row-about">
			<div class="row about-figure">
				<div class="col-md-4 figure"></div>
				<div class="col-md-4 text-figure">Весь ассортимент</div>
				<div class="col-md-4 figure"></div>
			</div>
		</div>
		<div class="container">
			<?php foreach($categories as $key=>$value) : ?>
				<div class="row">
					<?php foreach($value as $val) :?>
						<div class="col-md-6">
							<div class="item-production">
								<img src="<?php echo get_the_post_thumbnail_url($val->ID)?>" alt="item1">
								<div class="item-link">
									<a href="<?php the_permalink($val->ID)?>">Описание продукции</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
			<?php if ($count_page>1){?>
				<nav class="text-center" >
					<ul class="pagination">
						<?php if ($curent_page>0){?>
							<li><a href="<?=$cat_id.'?'?><?='page='.'0'?>"><<</a></li>
							<li><a href="<?=$cat_id.'?'?><?='page='.($curent_page-1)?>"><</a></li>
						<?php }$activ='active'?>

						<?php $ind=0; if($curent_page>2){$ind=$curent_page-2;}else{$ind=$curent_page;} for($i=$ind;$i<$curent_page+3;$i++) { if ($i<$count_page){ ?>
							<li class="<?php if($i==$curent_page){echo $activ;}?>"><a  href="<?=$cat_id.'?'?><?='page='.$i?>"><?=$i+1?></a></li>
						<?php }} ?>
						<?php if ($curent_page<$count_page-1){ ?>
							<li><a href="<?=$cat_id.'?'?><?='page='.($curent_page+1)?>">></a></li>
							<li><a href="<?=$cat_id.'?'?><?='page='.($count_page-1)?>">>></a></li>
						<?php }?>
					</ul>
				</nav>
			<?php }?>
		</div>
	</div>

<?php

get_footer();
