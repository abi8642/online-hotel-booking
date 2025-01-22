<?php

include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
  $type = "user";

  if (empty($_POST["fname"]) && empty($_POST["lname"]) && empty($_POST["email"]) && empty($_POST["pass"]) && empty($_POST["cpass"])) {
    echo "All Fields are Required";
  } else {
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    // check if e-mail address syntax is valid
    if (!preg_match(
      "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",
      $email
    )) {
      echo "Invalid email format";
    } else {
      $exist_sql = "SELECT * FROM signUp WHERE email = '$email'";
      $exist_sql_result = mysqli_query($conn, $exist_sql);
      $num_exist_row = mysqli_num_rows($exist_sql_result);
      if ($num_exist_row > 0) {
        echo "The Email is already exist";
      } else {
        if ($pass === $cpass) {
          $hash_pass = password_hash($pass, CRYPT_MD5);

          // echo "$hash_pass";
          // echo var_dump(password_verify($cpass, $hash_pass));

          $insert = "INSERT INTO `signup`(`first_name`, `last_name`, `email`, `password`, `type`) VALUES ('$fname','$lname','$email','$hash_pass', '$type')";
          $insert_result = mysqli_query($conn, $insert);

          if ($insert_result) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            header("location: index.php");
          }
        } else {
          echo "Password and Confirm Password should match";
        }
      }
    }

    // $sql = "SELECT `email` FROM `signup` WHERE `email` = '$email";
    // $result = mysqli_query($conn, $sql);

    // $num = mysqli_num_rows($result);

    // if ($num > 0) {
    //   echo "The email is already exist";
    // } else {
    // }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="Css/signlog.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="signup-box">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form action="signup.php" method="POST">
      <label>First Name</label>
      <input type="text" name="fname">
      <label>Last Name</label>
      <input type="text" name="lname">
      <label>Email</label>
      <input type="email" name="email">
      <label>Password</label>
      <input type="password" name="pass">
      <label>Confirm Password</label>
      <input type="password" name="cpass">
      <input type="submit" value="Submit" name="submit">
    </form>
    <p>
      By clicking the Sign Up button,you agree to our <br />
      <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
  </div>
  <p class="para-2">
    Already have an account? <a href="login.php">Login here</a>
  </p>
</body>

</html>