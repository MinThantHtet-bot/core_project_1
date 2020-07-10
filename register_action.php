<?php

include('conf.php');

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $sql = "INSERT INTO users (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

 mysqli_query($conn,$sql);

 session_start();

 $_SESSION['msg'] = "Registration Success !";

 header('location:log_in.php');


?>