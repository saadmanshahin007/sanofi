<?php
require('connect.php');
if (isset($_POST['submit'])) {
  $doc_name = $_POST['doc_name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $availability = $_POST['availability'];
  $specialist = $_POST['specialist'];
  $fee = $_POST['fee'];
  $feature = $_POST['feature'];
  $postdate = $_POST['postdate'];
  $sql = "INSERT INTO `doctor` (`name`, `email`, `mobile`, `availability`, `specialist`,`fee`, `feature`, `postdate`) 
  VALUES ('$doc_name','$email','$mobile','$availability','$specialist','$fee', '$feature','$postdate')";
  $result = mysqli_query($connect, $sql);
  if ($result == TRUE) {
    echo "Doctor added successfully.";
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
    <title>Doctor Add</title>
</head>

<body>
  <div class="header my-5" style="text-align:center;">
    <h style="font-weight: bold; font-size:larger;">Adding Doctor</h>
  </div>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Doctor Name</label>
        <input type="text" class="form-control" placeholder="Enter Doctor name" name="doc_name">
      </div>
      <div class="form-group">
        <label>Doctor Email</label>
        <input type="text" class="form-control" placeholder="Enter Doctor Email" name="email">
      </div>
      <div class="form-group">
        <label>Doctor Mobile</label>
        <input type="text" class="form-control" placeholder="Enter Doctor Mobile" name="mobile">
      </div>
      <div class="form-group">
        <label>Doctor Availability</label>
        <input type="text" class="form-control" placeholder="Enter Doctor availability" name="availability">
      </div>
      <div class="form-group">
        <label>Doctor Specialist</label>
        <input type="text" class="form-control" placeholder="Enter Doctor Specialist" name="specialist">
      </div>
      <div class="form-group">
        <label>Doctor Fee</label>
        <input type="text" class="form-control" placeholder="Enter Doctor Fee" name="fee">
      </div>
      <div class="form-group">
        <label>Doctor Feature</label>
        <input type="text" class="form-control" placeholder="Enter Doctor feature" name="feature">
      </div>
      <div class="form-group">
        <label>Doctor Post Date</label>
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