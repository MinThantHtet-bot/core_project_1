<?php
include('conf.php');
session_start();

$name  = $_POST['name'];
$image = "profile.jpg";

$sql = "INSERT INTO students (`name`,`img`,`created_date`,`updated_date`) VALUES ('$name','$image',now(),now()) ";

mysqli_query($conn, $sql);

$_SESSION['msg'] = "Add Success !";

header('location:home.php');


?>