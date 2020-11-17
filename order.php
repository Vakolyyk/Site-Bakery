<?php
	$pageTitle = "Order-page";
	include("./templates/_head.php");
?>


	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<?php include("./templates/_header.php");?>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php include("./templates/_aside.php");?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">

					<div class="title-1">Make an order</div>

					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/1.png">
						</div>
						<div class="order-desc">
							<h4 class="order-title">Croissant</h4>
							<div class="order-price">8 ₴</div>
						</div>
					</div>
 
					<form action="send.php" method="post">
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Name and Surname">
						</div>
						<div class="form-group">
							<input name="number" type="text" class="form-control" placeholder="Number of">
						</div>
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input name="adress" type="text" class="form-control" placeholder="Adress">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Place an order</button>
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
<?php include("./templates/_footer.php");?>	