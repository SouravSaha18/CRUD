<?php
	include "datacon.php";
	$sql="SELECT * FROM product";
	
	$result=$conn->query($sql);
	
?>


<html>
<head>
	<title>Home</title>
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
	<center>
		<h1> Product Information</h1>
		<table border='20' cellpadding='10' >
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Expire_date</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
			<?php
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['expire_date']; ?></td>
                <td>
                    <a href='update.php?id=<?php echo $row['id']; ?>'>&#9989;</a>
				</td>
				<td>
                    <a href='delete.php?id=<?php echo $row['id']; ?>'>&#10060;</a>
                </td>
            </tr>
           <?php } ?>
		</table>
	</center>
	<br> <br>
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



