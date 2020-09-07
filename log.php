<?php
require_once('db.php');
session_start();

$name           = $_POST['name'];
$password     = $_POST['password'];

$_SESSION['name'] = $name;
$_SESSION['password'] = $password;

if (empty($name) || empty($password)) {
    echo "null submission found!";
} else {
    $con = dbConnection();
    $sql = "select * from user where uName='{$name}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (count($row) > 0) {
        echo "login Successful!";
    } else {
        echo "login failed!";
    }
}
