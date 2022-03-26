<!DOCTYPE html>
<html>

<head>
<title>SAFONI | Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Start Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/contact.css">

  <!-- Start Global CSS -->
  <link rel="stylesheet" type="text/css" href="css/global.css">


</head>

<body>

<div id="header">
    <?php include 'header.php'; ?>
  </div>

  <h3 style="text-align:center">Contact Form</h3>

  <div class="container">
    <form action="/action_page.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      <label for="country">Location Area</label>
      <select id="country" name="country">
        <option value="dhaka">Dhaka</option>
        <option value="sylhet">Sylhet</option>
        <option value="barisal">Barisal</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>

  <hr>

  <div class="footer">
    <?php include 'footer.php'; ?>
  </div>

</body>

</html>