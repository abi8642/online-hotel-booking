<?php

include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {
  $email = $_GET["email"];
  $pass = $_GET["pass"];

  $sql = "SELECT * FROM `signup` WHERE `email` = '$email'";
  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);

  if ($num == 1) {

    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($pass, $row["password"])) {
        if ($row["type"] == "user") {
          session_start();
          $_SESSION["loggedin"] = true;
          $_SESSION["email"] = $email;
          header("location: index.php");
        }
      } else {
        echo "Password Worng";
      }
    }
  } else {
    echo "The Email is not registered. Please register first";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="stylesheet" href="Css/signlog.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="login-box">
    <h1>Login</h1>
    <form action="login.php" method="GET">
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" />
      <label>Password</label>
      <input type="password" name="pass" placeholder="Password" />
      <input type="submit" name="submit" />
    </form>
  </div>
  <p class="para-2">
    Not have an account? <a href="signup.php">Sign Up Here</a>
  </p>
</body>

</html>