<?php
	include "datacon.php";
	$id = $_GET['id'];
	$sql="SELECT * FROM product WHERE id={$id}";
	
	$data = $conn->query($sql);
	$row = $data->fetch_assoc()
	
?>


<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="template clear">
	<header class="headsection clear">
	<div class="title clear">
		<h2><span class="extra">C</span>R<span class="extra">U</span>D</h2>
	</div>
	<nav class="mainmenu clear">
		<a href="index.php">Home</a> -
		<a href="insert.php">Insert</a> 
	</nav>
   </header>
	
	
	<div class="mainsection clear">
	<br> <br>

	<h1 style="font-weight: bold;text-align: center;">Update Data</h1>
	<form action="updateaction.php" method="post">
		<table style="margin: auto;">
			<tr>
				<td><label>ID </label></td>
				<td><input type="number" name="id" value="<?php echo $row['id']; ?>" readonly></td>
			</tr>
			<tr>
				<td><label>Name </label></td>
				<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
			</tr>
			<tr>
				<td><label>Description</label></td>
				<td><input type="text" name="des" value="<?php echo $row['description']; ?>"></td>
			</tr>
			<tr>
				<td><label>Quantity</label></td>
				<td><input type="number" name="quan" value="<?php echo $row['quantity']; ?>"></td>
			</tr>
			<tr>
				<td><label>Price</label></td>
				<td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
			</tr>
			<tr>
				<td><label>Expire Date</label></td>
				<td><input type="date" name="date" value="<?php echo $row['expire_date']; ?>"></td>
			</tr>
			<tr>
				<td></td><
				<td><input type="submit" name="sub" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<br>
	</div>
	<footer class="footsection clear">
		<section class="footportion clear">
			<p>&copy;Copyright <a href="#">Sourav Saha</a> ||  <a href="#"> 19CSE029 </p>
			<p>Email: <a href="sourav.cse6.bu@gmail.com">sourav.cse6.bu@gmail.com</a></p>
		</section>
	</footer>
	</div>
	
</body>
</html>