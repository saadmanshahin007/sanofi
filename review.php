<!DOCTYPE html>
<html>

<head>
<title>SAFONI | Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Start Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/review.css">

  <!-- Start Global CSS -->
  <link rel="stylesheet" type="text/css" href="css/global.css">


</head>

<body>

<div id="header">
    <?php include 'header.php'; ?>
  </div>

  <h1 style="text-align:center">Reviews</h1>
  <section id="medsupports">

<div class="medsupport1">
  <img id="medimg" src="images/read.jpg">
  <div class="text">
    <h1>Review Details</h1>
    <p>It will show Review database</p>
    <a class="Reviewcrud" href="showReview.php" target="_blank">Show Reviews</a>
  </div>
</div>

<div class="medsupport2">
  <img id="medimg" src="images/add.jpg">
  <div class="text2">
    <h1>Review Adds</h1>
    <p>It will add new Review</p>
    <a class="Reviewcrud" href="product_add.php" target="_blank">Add Reviews</a>
  </div>
</div>

<div class="medsupport3">
  <img id="medimg" src="images/delete.jpg">
  <div class="text3">
    <h1>Review Deletes</h1>
    <p>It will delete expired Review</p>
    <a class="Reviewcrud" href="product_display.php" target="_blank">Delete Reviews</a>
  </div>
</div>

<div class="medsupport4">
  <img id="medimg" src="images/update.jpg">
  <div class="text3">
    <h1>Review Updates</h1>
    <p>It will update Review data</p>
    <a class="Reviewcrud" href="product_display.php" target="_blank">Update Reviews</a>
  </div>
</div>

</section>

  <hr>
  <div class="footer">
    <?php include 'footer.php'; ?>
  </div>
  </div>

  
</body>

</html>