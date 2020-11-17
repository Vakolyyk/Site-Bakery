<?php
	session_start();
	
	if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on"){
		header("Location: index.php");
	}

	$pageTitle = "Admin-page";
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
				<div class="col-12">
					<div class="title-1">Add product</div>

					<form method="post" action="add-new.php" enctype="multipart/form.data">
						<div class="form-group">
							<input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
						</div>
						<div class="form-group">
							<select class="form-control" name="category">
								<option value="Sweet pastries">Sweet pastries</option>
								<option value="Hearty pastries">Hearty pastries</option>
								<option value="Bread">Bread</option>
								<option value="Hot-Dog">Hot-Dog</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
						</div>

						<div class="form-check form-check-inline">
							<input name="new" class="form-check-input" type="checkbox" id="inlineCheckbox" value="1">
							<label class="form-check-label" for="inlineCheckbox">New</label>
						</div>

						<div class="form-group pt-3">
							<label for="exampleFormControlFile1">Photo:</label>
							<input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Description:</label>
								<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
<?php include("./templates/_footer.php");?>	