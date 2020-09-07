<?php
require_once('db.php');
session_start();

$name           = $_SESSION['name'];
$password     = $_SESSION['password'];


$con = dbConnection();
$sql = "select * from user where uName='{$name}' and password='{$password}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['type'] == "Admin") {
    header("Location: admin_login.php");
} else {
    header("Location: emp_login.php");
}
