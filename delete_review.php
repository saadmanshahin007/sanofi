<?php
include_once 'dbh.php';

$id= $_GET['id'];


$sql="DELETE from review where id=$id";

if($conn->exec($sql)==true)
{
    header("Location: showReview.php");
  
}
else
{
    echo " Something is wrong!";
}

