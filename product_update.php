<?php
require('connect.php');
$id=$_GET['updateid'];
$sql="SELECT * FROM `medicine` WHERE id=$id";
$result = mysqli_query($connect, $sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$company = $row['company'];
$price = $row['price'];
$image = $row['image'];;
$description = $row['description'];
$shippingcost = $row['shippingcost'];
$stock = $row['stock'];
$availability = $row['availability'];
$feature = $row['feature'];
$postdate = $row['postdate'];

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
  $sql = "UPDATE `medicine` set id=$id, `name`='$name', `company`='$company', `price`='$price', `image`'$image', `description`='$description',`shippingcost`='$shippingcost', `stock`='$stock', `availability`='$availability', `feature`='$feature', `postdate`='$postdate' WHERE id=$id";
  $result = mysqli_query($connect, $sql);
  if ($result == TRUE) {
    echo "Product updated successfully.";
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
    <title>Product Update</title>
</head>

<body>
  <div class="header my-5" style="text-align:center;">
    <h style="font-weight: bold; font-size:larger;">Updating Product</h>
  </div>
  <div class="container my-5">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" placeholder="Enter product name" name="name" autocomplete="off" value=<?php echo $name;?>>
      </div>
      <div class="form-group">
        <label>Company Name</label>
        <input type="text" class="form-control" placeholder="Enter company name" name="company" autocomplete="off" value=<?php echo $company;?>>
      </div>
      <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" placeholder="Enter product price" name="price" autocomplete="off" value=<?php echo $price;?>>
      </div>
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" class="form-control" placeholder="Enter product image" name="image" autocomplete="off" value=<?php echo $image;?>>
      </div>
      <div class="form-group">
        <label>Product Desciption</label>
        <input type="text" class="form-control" placeholder="Enter product description" name="description" autocomplete="off" value=<?php echo $description;?>>
      </div>
      <div class="form-group">
        <label>Product Shipping Cost</label>
        <input type="text" class="form-control" placeholder="Enter shipping cost" name="shippingcost" autocomplete="off" value=<?php echo $shippingcost;?>>
      </div>
      <div class="form-group">
        <label>Product Stock</label>
        <input type="text" class="form-control" placeholder="Enter product stock" name="stock" autocomplete="off" value=<?php echo $stock;?>>
      </div>
      <div class="form-group">
        <label>Product Availability</label>
        <input type="text" class="form-control" placeholder="Enter product availability" name="availability" autocomplete="off" value=<?php echo $availability;?>>
      </div>
      <div class="form-group">
        <label>Product Feature</label>
        <input type="text" class="form-control" placeholder="Enter product feature" name="feature" autocomplete="off" value=<?php echo $feature;?>>
      </div>
      <div class="form-group">
        <label>Product Post Date</label>
        <input type="date" class="form-control" placeholder="Enter post date" name="postdate" autocomplete="off" value=<?php echo $postdate;?>>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>
  <div>
    <?php include('footer.php') ?>
  </div>
</body>

</html>