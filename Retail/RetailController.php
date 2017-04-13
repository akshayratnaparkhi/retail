<?php
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
	/*
	 controls the RESTful services
	 URL mapping
	 */
	switch($view){
		case "all":
			print("All products printed");
			break;
		case "single":
			print("product printed: "+$_GET("id"));
			break;
		case "hybrid":
			print("product printed: "+$_GET("category")+" => "+$_GET("id"));
			break;
		default:
			break;
	}
?>