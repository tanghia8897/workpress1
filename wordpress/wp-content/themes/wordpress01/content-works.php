<?php 
	$tieude = get_field('tiêu_đề_works');
	$noidung = get_field('nội_dung_phần_works');


	wp_reset_query();
	$sanpham = new WP_Query(array('post_type' => 'san_pham'));
 ?>

<!-- begin work -->

	<div class="work">	
		<div class="container tieudework">
			<div class="row wow swing" >
				<div class="col-sm-12 text-sm-center">
					<h2 class="vienxanh "><?php echo $tieude ?></h2>
				</div>
			</div>
			<div class="mohinh">
				<a href="" class="btn btn-default nutwelcome">All<a>
				<a href="" class="btn btn-default nutwelcome">App Mockups<a>
				<a href="" class="btn btn-default nutwelcome">Print Desion<a>
				<a href="" class="btn btn-default nutwelcome">Visual Desion<a>
				<a href="" class="btn btn-default nutwelcome">UI & UX Desion<a>
			</div>
		</div>

		<div class="container">
		<div class="row works">
				
					<?php while ($sanpham -> have_posts()) {
						$sanpham->the_post();
					?>
					
					
					 <div class="col-sm-6">
						<a href="" class="motsanpham wow bounceInUp" data-wow-delay="0.2s">
							<img src="<?php the_post_thumbnail() ?>
							<span class="thongtin1sp">
								<h4 class="tensanpham">
									<?php the_title() ?>
								</h4>
								<span class="danhmucsanpham">
									<?php 
										$danhmuc = get_the_terms( $post->ID, 'danh_muc_san_pham' );
										if(!empty($danhmuc)){
											foreach ($danhmuc as $phantu) {
												echo $phantu->name;
											}
										}	
									 ?>
								</span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end work -->