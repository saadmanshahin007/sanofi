<?php
include 'dbh.php';


$sql="SELECT * FROM review";

$returnObj2=$conn->query($sql);

$data=$returnObj2->fetchAll();


foreach ($data as $row) {

  echo "<h3>$row[name]</h3>
        <p>$row[review_text]</p>
        <a href='delete_review.php?id=$row[id]'>Delete</a>
        
        
  ";
}

?>




