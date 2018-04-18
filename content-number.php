
<?php 
	
	$sothu1 = get_field('so_thu_1');
	$sothu2 = get_field('so_thu_2');
	$sothu3 = get_field('so_thu_3');
	$sothu4 = get_field('so_thu_4');

	$trangthai1 = get_field('trang_thai_1');
	$trangthai2 = get_field('trang_thai_2');
	$trangthai3 = get_field('trang_thai_3');
	$trangthai4 = get_field('trang_thai_4');
 ?>
<!-- begin number -->
	<div class="number">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="conso">
						<div class="chuso"><?php echo $sothu1 ?></div>
						<div class="chu"><?php echo $trangthai1 ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="chuso"><?php echo $sothu2 ?></div>
						<div class="chu"><?php echo $trangthai2 ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="chuso"><?php echo $sothu3 ?></div>
						<div class="chu"><?php echo $trangthai3 ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="chuso"><?php echo $sothu4 ?></div>
						<div class="chu"><?php echo $trangthai4 ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end number -->