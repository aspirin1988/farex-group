<?php include_once ("gallery.php");?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<?php $current_object=get_queried_object();?>
	<title>	Farex Group | <?php $query='';
		if (is_tax()){
			$_title=get_field('meta-title',$current_object->taxonomy.'_'.$current_object->term_taxonomy_id);
			if ($_title){echo $_title;} else {the_title();}
		}else{if (get_field('meta-title')){the_field('meta-title');}else{the_title();}}?></title>
	<meta name="description" content="<?php if (is_tax()){ echo get_field('mata-description',$current_object->taxonomy.'_'.$current_object->term_taxonomy_id);}else{ the_field('mata-description');}?>"/>
	<link rel="shortcut icon" href="<?=get_field('favicon',4)?>">


	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_directory') ?>/public/css/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/public/css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!-- Лого и меню -->

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<a href="/"><img class="logo-img" src="<?php the_field('header-logo',4)?>" alt="logo"></a>
		</div>
		<div class="col-md-7 col-sm-12 text-right ">
			<div class="number-telephone">
				<img src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="telephone">
				<span><a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a></span>
				<span><a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a></span>
				<span><a href="tel:<?php the_field('phone3',4); ?>"><?php the_field('phone3',4); ?></a></span>
			</div>
			<nav class="navbar navbar-default nav-custom">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">МЕНЮ</a>
					</div>
					<div class="collapse navbar-collapse items-menu" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<?php $menu=wp_get_nav_menu_items('main'); $title=get_post();  foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_post(); if($title->ID==$val->object_id){$class='active';} ?>
								<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
							<?php }}?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>

<div class="container-fluid breadcrumb-background">
	<div class="container">
		<ol class = "breadcrumb">

			<?php if (!is_front_page()):?><li><a href = "/">Главная</a></li><?php endif; ?>
			<?php if (!is_front_page()&&!is_single()&&!is_category()):?><li><a href = "<?php the_permalink() ?>"><?php the_title() ?></a></li><?php endif; ?>
			<?php if (is_category()||is_single()):?><li><a href = "<?php $cat=get_the_category(); echo get_term_link($cat[0]->term_id) ?>"><?php echo $cat[0]->name ?></a></li><?php endif; ?>
			<?php if (is_single()):?><li><a href = "<?php the_permalink() ?>"><?php the_title() ?></a></li><?php endif; ?>

		</ol>
	</div>
</div>