<?php
	include "datacon.php";
	
	if(empty($_POST['name'])||empty($_POST['quan'])||empty($_POST['price'])||empty($_POST['date'])){
		$conn->close();
		header("Location: http://localhost/lab6/CRUD/update.php");
	}
	$id = $_POST['id'];
	$name = $_POST['name'];
	$des = $_POST['des'];
	$quan = $_POST['quan'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	$sql = "UPDATE product SET name='{$name}', description='{$des}', quantity='{$quan}', price='{$price}', 
	expire_date='{$date}' WHERE id='{$id}';";
	$conn->query($sql);
	$conn->close();
	header("Location: http://localhost/lab6/CRUD/index.php");
?>