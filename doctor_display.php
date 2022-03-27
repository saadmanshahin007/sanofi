<?php
require('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Doctors</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="doctor_add.php" class="text-light">Add Doctor</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Feature</th>
                    <th scope="col">Postdate </th>
                    <th scope="col">Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `doctor`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $availability = $row['availability'];;
                        $specialist = $row['specialist'];
                        $fee = $row['fee'];
                        $feature = $row['feature'];
                        $postdate = $row['postdate'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $availability . '</td>
                        <td>' . $specialist . '</td>
                        <td>' . $fee . '</td>
                        <td>' . $feature . '</td>
                        <td>' . $postdate . '</td>
                        <td>
                        <button class="btn btn-primary"><a class="text-light" href="doctor_update.php? updateid='.$id.'">Update</a></button>
                        <button class="btn btn-danger"><a class="text-light" href="doctor_delete.php? deleteid='.$id.'">Delete</a></button>
                        </td>
                      </tr>';
                    }
                }

                ?>
                
            </tbody>
        </table>
    </div>

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>