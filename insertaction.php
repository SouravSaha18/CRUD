<?php
	include "datacon.php";
	$sql="SELECT * FROM product";
	
	$result=$conn->query($sql);
	
	if(empty($_POST['name'])||empty($_POST['quan'])||empty($_POST['price'])||empty($_POST['date'])){
		$conn->close();
		header("Location: http://localhost/lab6/CRUD/insert.php");
	}
	$name = $_POST['name'];
	$des = $_POST['des'];
	$quan = $_POST['quan'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	$sql = "INSERT INTO product(id, name, description, quantity, price, expire_date)
	VALUES('', '{$name}', '{$des}', '{$quan}', '{$price}', '{$date}')";
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	header("Location: http://localhost/lab6/CRUD/index.php");
?>