<?php

session_start();

include('conf.php');

$name = $_POST['name'];

$id = $_POST['id'];

$sql = "UPDATE students SET `name`='$name' WHERE id = '$id' ";

mysqli_query($conn,$sql);

$_SESSION['msg'] = "Update Success !";

header('location:home.php');


?>