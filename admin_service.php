<?php
include 'connect.php';
if(isset($_POST['submit'])){
   $ServiceID=$_POST['ServiceID'];
   $ServiceType=$_POST['ServiceType'];
   $ServiceStaff=$_POST['ServiceStaff'];
   $StaffPhoneNumber=$_POST['StaffPhoneNumber'];
   $StaffID=$_POST['StaffID'];
   $ServiceCharge=$_POST['ServiceCharge'];
   $ServiceLocation=$_POST['ServiceLocation'];
   $ServiceStatus= $_POST['ServiceStatus'];

   $sql= "INSERT into `services` (`ServiceID`, `ServiceType`, `ServiceStaff`, `StaffPhoneNumber`, `StaffID`, `ServiceCharge`, `ServiceLocation`, `ServiceStatus`) values
     ('$ServiceID', '$ServiceType','$ServiceStaff', '$StaffPhoneNumber', '$StaffID', '$ServiceCharge', '$ServiceLocation','$ServiceStatus')";
     $result=mysqli_query($connect,$sql);
     if($result){
         //echo "success";
         header('location:display_service.php');
     }
     else{
        die(mysqli_error($connect));
     }
    
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Services</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <div class="form-group">
                    <label>ServiceID</label>
                    <input type="text" class="form-control" placeholder="Enter Service ID" name="ServiceID">
                </div>
                <label>ServiceType</label>
                <input type="text" class="form-control" placeholder="Enter Service Type" name="ServiceType">
            </div>
            <div class="form-group">
                <label>ServiceStaff</label>
                <input type="text" class="form-control" placeholder="Enter Staff Name" name="ServiceStaff">
            </div>
            <div class="form-group">
                <label>StaffPhoneNumber</label>
                <input type="text" class="form-control" placeholder="Enter Staff Phone Number" name="StaffPhoneNumber">
            </div>
            <div class="form-group">
                <label>StaffID</label>
                <input type="text" class="form-control" placeholder="Enter Staff ID" name="StaffID">
            </div>
            <div class="form-group">
                <label>ServiceCharge</label>
                <input type="text" class="form-control" placeholder="Enter Service Charge" name="ServiceCharge">
            </div>
            <div class="form-group">
                <label>ServiceLocation</label>
                <input type="text" class="form-control" placeholder="Enter Service Location" name="ServiceLocation">
            </div>
            <div class="form-group">
                <label>ServiceStatus</label>
                <input type="text" class="form-control" placeholder="Enter Service Status" name="ServiceStatus">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>