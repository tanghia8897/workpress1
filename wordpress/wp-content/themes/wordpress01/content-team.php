
<?php $tieudeteam = get_field('tieu_de_team') ?>
<!-- begin the team -->
	<div class="theteam">
		<div class="container">
			<div class="row wow swing" >
					<div class="col-sm-12 text-sm-center">
						<h2 class=" chungan"><?php echo $tieudeteam ?></h2>
					</div>
				</div>

			<div class="row">
				<?php wp_reset_query();
				$thongtin = new WP_Query(array('post_type'=>'nhan_vien'));
				while ($thongtin->have_posts()) {
					$thongtin->the_post();
					$tennhanvien = get_field('ten_nhan_vien');
					$vitri = get_field('vi_tri');
				
				?>
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0s">
					<a href="" class="motsanpham _1team">
						<!-- <img src="images/4.jpg" alt=""> -->
						<img src="<?php the_post_thumbnail() ?>
						<span class="thongtin1sp">
							<h4 class="tensanpham">
								<?php echo $tennhanvien ?>
							</h4>
							<span class="danhmucsanpham"><?php echo $vitri ?></span>
						</span>
					</a>
				</div>

				<?php } ?>
			</div><!-- end row -->

		</div> 
	</div>
	<!-- end the team	 -->