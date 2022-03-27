<?php
require('connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `doctor` where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result == TRUE) {
        header('location:doctor_display.php');
    } else {
        echo "Error:" . $sql . "<br>" . $connect->error;
      }
      $connect->close();
}
?>