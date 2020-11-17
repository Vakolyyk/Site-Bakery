<?php
	$pageTitle = "Home-page";
	include("./templates/_head.php");
	require("./config.php");
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
				<div class="col-md-9 col-lg-10">
					<div class="row">



<?php
$sql="SELECT * FROM products WHERE id = 16";

$result = $db->query($sql);

$products = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($products as $product){
	include("./templates/_product-item.php");
}

?>
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
<?php include("./templates/_footer.php");?>	