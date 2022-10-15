<?php
	include "datacon.php";
	
	$id=$_GET["id"];
	$sql="DELETE from product WHERE id='$id'";
	$result=$conn->query($sql);
	if($result)
		header("Location: http://localhost/lab6/CRUD/index.php");
?>