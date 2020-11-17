<?php
	require("./config.php");

	session_start();
	
	if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on"){
		header("Location: index.php");
	}

	if(!isset($_POST["new"])){
		$_POST["new"] = NULL;
	}

	if(isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
		move_uploaded_file($_FILES["img"]["tmp_name"], "./img/products/" . $_FILES["img"]["name"]);
		$fileName = $_FILES["img"]["name"];
	}
	
	$sql = "INSERT INTO products (title, price, description, img, category, new) 
				VALUES(:title, :price, :description, :img, :category, :new)";
	$stmt = $db->prepare($sql);

	$stmt->bindValue(":title", $_POST["title"]);
	$stmt->bindValue(":price", $_POST["price"]);
	$stmt->bindValue(":description", $_POST["description"]);
	$stmt->bindValue(":img", $_POST["img"]);
	$stmt->bindValue(":category", $_POST["category"]);
	$stmt->bindValue(":new", $_POST["new"]);
	
	$stmt->execute();

	header("Location: admin-success.php");