<?php
	require("./config.php");

	$pageTitle = "Product-page";
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
				<?php
					
					include("./templates/info-item.php");
				?>	
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php");?>	