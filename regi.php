<?php
require_once('db.php');

$eName               = $_POST['eName'];
$cName               = $_POST['cName'];
$cNo                 = $_POST['cNo'];
$uName               = $_POST['uName'];
$pass                = $_POST['pass'];
$cpass               = $_POST['cpass'];
$type                = $_POST['type'];

if (empty($eName) || empty($cName) || empty($cNo) || empty($uName) || empty($pass) || empty($type)) {
    echo "null submission found!";
} else {
    $con = dbConnection();
    $sql = "insert into user values('{$eName}', '{$cName}', '{$cNo}', '{$uName}', '{$pass}', '{$type}')";
    if (mysqli_query($con, $sql)) {
        echo "done!";
    } else {
        echo "failed!";;
    }
}
