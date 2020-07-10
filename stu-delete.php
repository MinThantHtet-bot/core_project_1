<?php
session_start();
include('conf.php');

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";

mysqli_query($conn,$sql);

$_SESSION['msg'] = "Delete Success !";

header('location:home.php');

?>