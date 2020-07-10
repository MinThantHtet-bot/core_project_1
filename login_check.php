<?php
session_start();
include('conf.php');

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $_SESSION['auth'] = true;
        header('location:home.php');
    }
  } else {

    $_SESSION['error'] = "Fail to Log in !";

    header('location:log_in.php');
  }


?>