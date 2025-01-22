<?php

include "../db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $phn = $_POST["phn"];
  $idproof = $_POST["idproof"];
  $cont = $_POST["cont"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  $pin = $_POST["pin"];
  $add = $_POST["add"];
  $gender = $_POST["gender"];

  $insert_sql = "INSERT INTO `booking` (`uname`, `email`, `ph_no`, `id_proof`, `cont`, `state`, `city`, `pin`, `address`, `gender`) VALUES ('$uname', '$email', '$phn', '$idproof', '$cont', '$state', '$city', '$pin', '$add', '$gender')";
  $result = mysqli_query($conn, $insert_sql);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Booking Form </title>
  <link rel="stylesheet" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Booking Form</div>
    <div class="content">
      <form action="index.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="uname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your Email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phn" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">ID Proof</span>
            <input type="text" name="idproof" placeholder="Enter your ID" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" name="cont" placeholder="Enter your Country" required>
          </div>

          <div class="input-box">
            <span class="details">State</span>
            <input type="text" name="state" placeholder="Enter your State" required>
          </div>

          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="city" placeholder="Enter your City" required>
          </div>

          <div class="input-box">
            <span class="details">Pin</span>
            <input type="text" name="pin" placeholder="Enter your Pin" required>
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="add" placeholder="Enter your Address" required>
          </div>
        </div>

        <div class="gender-details">
          <span class="gender-title">Gender</span>
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-1" value="male">
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Book">
        </div>
      </form>
    </div>
  </div>

</body>

</html>