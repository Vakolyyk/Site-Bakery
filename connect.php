<?php
	
	$db = new PDO('mysql:host=localhost;dbname=bakery;charset=utf8','mysql','mysql');

	$sql="SELECT * FROM products";

	$result = $db->query($sql);

	$products = $result->fetchAll(PDO::FETCH_ASSOC);
	echo"<pre>";
	print_r($products);
	echo"</pre>";