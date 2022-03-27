<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container">
      <button class="btn btn-primary my-5"><a href="admin_service.php" class="text-light"> Add Services </a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Service ID</th>
      <th scope="col">Service Type</th>
      <th scope="col">ServiceStaff</th>
      <th scope="col">Staff Phone Number</th>
      <th scope="col">Staff ID</th>
      <th scope="col">Service Charge</th>
      <th scope="col">Service Location</th>
      <th scope="col">Service Status</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql="SELECT * FROM `services` ";
        $result=mysqli_query($connect, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $ServiceID=$row['ServiceID'];
                $ServiceType=$row['ServiceType'];
                $ServiceStaff=$row['ServiceStaff'];
                $StaffPhoneNumber=$row['StaffPhoneNumber'];
                $StaffID=$row['StaffID'];
                $ServiceCharge=$row['ServiceCharge'];
                $ServiceLocation=$row['ServiceLocation'];
                $ServiceStatus= $row['ServiceStatus'];
                echo '
                <tr>
                <th scope="row">'.$ServiceID.'</th>
                <td>'.$ServiceType.'</td>
                <td>'.$ServiceStaff.'</td>
                <td>'.$StaffPhoneNumber.'</td>
                <td>'.$StaffID.'</td>
                <td>'.$ServiceCharge.'</td>
                <td>'.$ServiceLocation.'</td>
                <td>'.$ServiceStatus.'</td>
                <td>
                <button class="btn btn-primary"><a href ""class="text-light">Update</a></button>
                <button class="btn btn-primary"><a href ""class="text-light">Delete</a></button>
                </td>
                </tr>';
            }
        }
      ?>
  </tbody>
</table>
  </div>  
</body>
</html>