<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<title>Astor Trade</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/carousel/assets/owl.carousel.css">
	<link href="<?php bloginfo('template_directory') ?>/public/css/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/public/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="background-img">
	<div class="container"> <!-- Лого и телефоны -->
		<div class="row">
			<div class="col-md-6">
			<a href="/"><img class="logo" src="<?php the_field('logo',8); ?>" alt="Logo"></a>
			</div>
			<div class="col-md-2">
				<p class="telephone">
					<img  src="<?php bloginfo('template_directory') ?>/public/img/telephone.png" alt="Telephone">
				</p>
			</div>
			<div class="col-md-2">
				<div class="telephone-number">
					<a href="tel:<?php the_field('phone1',8) ?>"><?php the_field('phone1',8) ?></a>
					</br>
					<a href="tel:<?php the_field('phone2',8) ?>"><?php the_field('phone2',8) ?></a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="telephone-number">
					<a href="tel:<?php the_field('phone3',8) ?>"><?php the_field('phone3',8) ?></a>
					</br>
					<a href="tel:<?php the_field('phone4',8) ?>"><?php the_field('phone4',8) ?></a>
				</div>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</div>

	<!-- Меню -->

	<nav class="navbar navbar-default menu">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav main-menu">
					<?php $menu=wp_get_nav_menu_items('main'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='active';} ?>
						<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->post_content?><br><?=$val->title?></a></li>
					<?php }}?>
				</ul>
		<!--<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <path d="M512,296l-96-96V56h-64v80l-96-96L0,296v16h64v160h160v-96h64v96h160V312h64V296z"/> </g> </svg>
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320 320" width="36px" height="36px" style="enable-background:new 0 0 320 320;" xml:space="preserve"> <path d="M273.507,0H46.495C21.896,0,1.882,20.21,1.882,45.051v229.897C1.882,299.79,21.896,320,46.495,320h227.012 c24.599,0,44.611-20.21,44.611-45.052V45.051C318.118,20.21,298.105,0,273.507,0z M95.943,224.689v-55.31H224.06v55.31H95.943z M234.698,149.38c-0.212-0.013-0.423-0.032-0.638-0.032s-0.426,0.019-0.638,0.032h-63.42V94.069h128.117v55.311H234.698z M95.943,74.069V20H224.06v54.069H95.943z M150.001,94.069v55.311H86.582c-0.212-0.013-0.423-0.032-0.638-0.032 s-0.426,0.019-0.638,0.032H21.882V94.069H150.001z M21.882,169.38h54.062v55.31H21.882V169.38z M244.06,169.38h54.059v55.31H244.06 V169.38z M298.118,45.051v29.019H244.06V20h29.447C287.077,20,298.118,31.237,298.118,45.051z M46.495,20h29.448v54.069H21.882 V45.051C21.882,31.237,32.923,20,46.495,20z M21.882,274.948v-30.259h128.119V300H46.495C32.923,300,21.882,288.762,21.882,274.948z M273.507,300H170.001v-55.311h128.117v30.259C298.118,288.762,287.077,300,273.507,300z"/> </svg>
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 308.357 308.357" width="36px" height="36px" style="enable-background:new 0 0 308.357 308.357;" xml:space="preserve"> <g> <path d="M87.758,3.55v44.507h25V28.55h170.6v126.434h-22.698c0,6.462,0,57.738,0,66.072h47.698V3.55H87.758z"/> <path d="M0,304.808h220.6V87.303H0V304.808z M25,112.303h170.6v126.434H25V112.303z"/> </g> </svg>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 490 490" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 490 490"> <path d="m364.998,200h-239.998c-8.284,0-15,6.716-15,15v200c0,8.284 6.716,15 15,15h239.998c8.284,0 15-6.716 15-15v-200c0-8.284-6.716-15-15-15zm-174.998,200h-50v-36.666h50v36.666zm0-66.666h-50v-36.668h50v36.668zm0-66.668h-50v-36.666h50v36.666zm80,133.334h-50v-36.666h50v36.666zm0-66.666h-50v-36.668h50v36.668zm0-66.668h-50v-36.666h50v36.666zm79.998,133.334h-49.998v-36.666h49.999v36.666zm-.001-66.666h-49.998v-36.668h49.999v36.668zm-.001-66.668h-49.998v-36.666h49.999v36.666zm75.001-266.666h-360c-8.284,0-15,6.716-15,15v460c0,8.284 6.716,15 15,15h360c8.284,0 15-6.716 15-15v-460c0-8.284-6.716-15-15-15zm-15,460h-330v-430h330v430zm-285.01-289.995h240.02c8.284,0 15-6.716 15-15v-80.005c0-8.284-6.716-15-15-15h-240.02c-8.284,0-15,6.716-15,15v80.005c0,8.284 6.716,15 15,15zm15-80.005h210.02v50.005h-210.02v-50.005z"/> </svg>
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 430.114 430.114" style="enable-background:new 0 0 430.114 430.114;" xml:space="preserve"> <g> <path id="Facebook_Places" d="M356.208,107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746,23.704,261.611,0,213.055,0 C148.054,0,76.463,43.586,66.905,133.427v18.355c0,0.766,0.264,7.647,0.639,11.089c5.358,42.816,39.143,88.32,64.375,131.136 c27.146,45.873,55.314,90.999,83.221,136.106c17.208-29.436,34.354-59.259,51.17-87.933c4.583-8.415,9.903-16.825,14.491-24.857 c3.058-5.348,8.9-10.696,11.569-15.672c27.145-49.699,70.838-99.782,70.838-149.104v-20.262 C363.209,126.938,356.581,108.204,356.208,107.051z M214.245,199.193c-19.107,0-40.021-9.554-50.344-35.939 c-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636,28.56-48.932,53.406-48.932c30.588,0,54.245,24.472,54.245,55.06 C270.138,174.729,244.833,199.193,214.245,199.193z"/> </g> </svg>-->
			</div>
		</div>
	</nav>