<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "hotel";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "There is an error while connecting to the database " + mysqli_connect_error($conn);
}
