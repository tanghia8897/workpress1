<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress01
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory") ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory") ?>/1.js"></script>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory") ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory") ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory") ?>/1.css">
 	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory") ?>/animate.css">
 	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
 	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory") ?>/js/waypoints.min.js"></script>
 	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory") ?>/js/jquery.counterup.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'wordpress01' ); ?></a> -->
	<?php $anh = get_field("anh_background") ?>

	<div class="headertren" style="background-image: url(<?php echo $anh["url"]; ?>);">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<nav class="navbar navbar-light bg-faded">
							<a class="navbar-brand" href="#"><span class="xanh">ZAPTO</span> DESIGN</a>
								
							<?php wp_nav_menu(array( // import phần navbar vào
								'container'=> 'div',
								'container_class'=>'navbar-collapse navbar-ex1-collapse',
								'menu_class'=>'navbar-nav mr-auto',

							)); ?>
					
						</nav>

			</div> <!-- end col 12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->

	<!-- begin slide -->
	<?php 
		$dong1 = get_field("dong_1");
		$dong2 = get_field("dong_2");
		$dong3 = get_field("dong_3");
		$tennut1 = get_field("ten_nut_1");
		$linknut1 = get_field("link_nut_1");
		$tennut2 = get_field("ten_nut_2");
		$linknut2 = get_field("link_nut_2");
	?>
	<div class="container">
		<div class="col-sm-12 chuthich">
			<div class="badongtext">
				<div class="d1">
					<!-- Materials that <span class="xanh">create solutions</span> -->
					<?php echo $dong1; ?>
				</div>
				<div class="d2">
				<!-- Zapto Design -->
					<?php echo $dong2; ?>
				</div>
				<div class="d3">
					<!-- <span class="xanh">Technology at the </span> speed of life -->
					<?php echo $dong3; ?>
				</div>
			</div>
			<div class="hainut">
				
				<a href="<?php echo $linknut1; ?>" target="_blank" class="btn btn-default nuttrang" ><?php echo $tennut1; ?></a>
				<a href="<?php echo $linknut2; ?>" target="_blank" class="btn btn-info nutxanh"><?php echo $tennut2; ?></a>
			</div>
		</div>
	</div>
	<!-- end slide --> 
	</div> <!-- end header -->


	<?php get_template_part("content","welcome");?>
	<?php get_template_part( 'content', 'works' ); ?>
	<?php get_template_part('content','number'); ?>
	<?php get_template_part('content','team'); ?>

	
