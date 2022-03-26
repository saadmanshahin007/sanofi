<?php
require('connect.php');
?>

<!DOCTYPE html>
<html>

<head>
<title>SAFONI | Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Start Tech Support CSS -->
	<link rel="stylesheet" type="text/css" href="css/medicine.css">

	<!-- Start Global CSS -->
	<link rel="stylesheet" type="text/css" href="css/global.css">


</head>

<body>

<div id="header">
    <?php include 'header.php'; ?>
  </div>

	<h1 style="text-align:center">Our Medicines</h1>

	<section id="medsupports">

		<div class="medsupport1">
			<img id="medimg" src="images/read.jpg">
			<div class="text">
				<h1>Medicine Details</h1>
				<p>It will show medicine database</p>
				<a class="medicinecrud" href="product_display.php" target="_blank">Show Medicines</a>
			</div>
		</div>

		<div class="medsupport2">
			<img id="medimg" src="images/add.jpg">
			<div class="text2">
				<h1>Medicine Adds</h1>
				<p>It will add new medicine</p>
				<a class="medicinecrud" href="product_add.php" target="_blank">Add Medicines</a>
			</div>
		</div>

		<div class="medsupport3">
			<img id="medimg" src="images/delete.jpg">
			<div class="text3">
				<h1>Medicine Deletes</h1>
				<p>It will delete expired medicine</p>
				<a class="medicinecrud" href="product_display.php" target="_blank">Delete Medicines</a>
			</div>
		</div>

		<div class="medsupport4">
			<img id="medimg" src="images/update.jpg">
			<div class="text3">
				<h1>Medicine Updates</h1>
				<p>It will update medicine data</p>
				<a class="medicinecrud" href="product_display.php" target="_blank">Update Medicines</a>
			</div>
		</div>

	</section>

	<hr>
	<div class="footer">
    <?php include 'footer.php'; ?>
  </div>



</body>

</html>