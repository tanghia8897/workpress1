
<?php 
	$tieudewelcome = get_field("tieu_de_welcome");
	$motawelcome = get_field("mo_ta_welcome");
 ?>

<!-- <div id="content" class="site-content"> -->
<div class="tieudewelcome">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 push-sm-3 text-sm-center wow bounceInUp">
					<h2 class="vienxanh">
						<!-- Welcome to Zapto Design -->
						<?php echo $tieudewelcome ?>
					</h2>
					<div class="motwelcome">
						<!-- if you want to have the most success When you are creating the homepage for your site
						it is a good idea -->
						<?php echo $motawelcome ?>
					</div>
				</div>
			</div> <!-- end row -->
		

		
			<div class="row">

				<?php 
					$thongtinkh = new WP_Query(array('post_type' => 'thong_tin_khoa_hoc'));
					while ($thongtinkh->have_posts()) {
						$thongtinkh->the_post();
						$tieudethongtinkh = get_field("tiêu_đề_thông_tin_khóa_học");
						$linkthongtinkhoahoc = get_field("link_thông_tin_khóa_học");
					
				?>
				<div class="col-sm-4 _3cotwelcome wow bounceInUp" data-wow-delay="0.6s">
					<h3 class="vienxanh"><?php the_title(); ?></h3>
					<div class="noidung1cot">
						<?php the_content(); ?>
					</div>
					<a href="<?php echo $linkthongtinkhoahoc ; ?>" class="btn btn-default nutwelcome"><?php echo $tieudethongtinkh; ?><a>
				</div>
				<?php } wp_reset_query() ?>
				
			</div>
		
		</div> <!-- end containẻr -->
	</div> <!-- end welcome -->
	<!-- end welcome -->