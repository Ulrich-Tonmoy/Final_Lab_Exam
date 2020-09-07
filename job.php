<?php
require_once('db.php');

$cName               = $_POST['cName'];
$jt               = $_POST['jt'];
$jl                 = $_POST['jl'];
$sal                = $_POST['sal'];

if (empty($cName) || empty($jt) || empty($jl) || empty($sal)) {
    echo "null submission found!";
} else {
    $con = dbConnection();
    $sql = "insert into job values('{$cName}', '{$jt}', '{$jl}', '{$sal}')";
    if (mysqli_query($con, $sql)) {
        echo "done!";
    } else {
        echo "failed!";;
    }
}
