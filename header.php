<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog de Greg</title>
	<meta name="viewport" content="width=device-width,
	 user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald" rel="stylesheet">
	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
	 <!-- REVISAR ESTA PARTE ANTES DE GRABAR-->
	<title>
		<?php if (is_home()){
			// Si estamos en la pagina de Inicio obtenemos el nombre del Blog
			echo get_bloginfo('name');
		} else if (is_single()){
			// Si es un post mostramos el titulo
			echo the_title();
		} else {
			// De otra forma obtenemos el titulo del post
			echo get_bloginfo('name');
		}?>
	</title>

	<?php wp_head(); ?>
</head>
<body> 
	<header>
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-md-6">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo falconMasters"></a>
				</div>
				<div class="redes-sociales col-xs-12 col-md-6">
					<a class="youtube" target="blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
					<a class="twitter" target="blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
					<a class="facebook" target="blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
		<nav class="menu">
			<div class="container">
				<div class="row">
					<ul class="col-md-12">
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
						<li><a href="#">JavaScript</a></li>
						<li><a href="#">Jquery</a></li>
						<li><a href="#">Photoshop</a></li>
						<li><a href="#">Git</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="ad container hidden-xs">
			<div class="row">
				<div class="col-md-12">
					<img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="adsens">
				</div>
			</div>
		</div>
	</header>