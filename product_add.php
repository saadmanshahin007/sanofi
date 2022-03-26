<?php
require('connect.php');
if (isset($_POST['submit'])) {
  $name = ['name'];
  $company = $_POST['company'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $shippingcost = $_POST['shippingcost'];
  $stock = $_POST['stock'];
  $availability = $_POST['availability'];
  $feature = $_POST['feature'];
  $postdate = $_POST['postdate'];
  $image = $_FILES['image']['name'];
  $tmp_loc = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp_loc, 'images/' . $image);
  $sql = "INSERT INTO `medicine` (`name`, `company`, `price`, `image`, `description`,`shippingcost`, `stock`, `availability`, `feature`, `postdate`) 
  VALUES ('$name','$company','$price','$image','$description','$shippingcost','$stock','$availability','$feature','$postdate')";
  $result = mysqli_query($connect, $sql);
  if ($result == TRUE) {
    echo "Product added successfully.";
  } else {
    echo "Error:" . $sql . "<br>" . $connect->error;
  }
  $connect->close();
}
?>


<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
</head>

<body>
  <div class="header my-5" style="text-align:center;">
    <h style="font-weight: bold; font-size:larger;">Adding Product</h>
  </div>
  <div class="container my-5">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" placeholder="Enter product name" name="name">
      </div>
      <div class="form-group">
        <label>Company Name</label>
        <input type="text" class="form-control" placeholder="Enter company name" name="company">
      </div>
      <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" placeholder="Enter product price" name="price">
      </div>
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" class="form-control" placeholder="Enter product image" name="image">
      </div>
      <div class="form-group">
        <label>Product Desciption</label>
        <input type="text" class="form-control" placeholder="Enter product description" name="description">
      </div>
      <div class="form-group">
        <label>Product Shipping Cost</label>
        <input type="text" class="form-control" placeholder="Enter shipping cost" name="shippingcost">
      </div>
      <div class="form-group">
        <label>Product Stock</label>
        <input type="text" class="form-control" placeholder="Enter product stock" name="stock">
      </div>
      <div class="form-group">
        <label>Product Availability</label>
        <input type="text" class="form-control" placeholder="Enter product availability" name="availability">
      </div>
      <div class="form-group">
        <label>Product Feature</label>
        <input type="text" class="form-control" placeholder="Enter product feature" name="feature">
      </div>
      <div class="form-group">
        <label>Product Post Date</label>
        <input type="date" class="form-control" placeholder="Enter post date" name="postdate">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
  <div>
    <?php include('footer.php') ?>
  </div>
</body>

</html>