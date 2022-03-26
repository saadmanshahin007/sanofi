<?php
require('connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `medicine` where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result == TRUE) {
        // echo "Product deleted successfully.";
        header('location:product_display.php');
    } else {
        echo "Error:" . $sql . "<br>" . $connect->error;
      }
      $connect->close();
}
?>