<?php
require_once('db.php');
session_start();

$name           = $_SESSION['name'];
$password     = $_SESSION['password'];

$con = dbConnection();
$sql = "select * from user where uName='{$name}' and password='{$password}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name       = $row['uName'];
?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
    <form action="admin.php" method="POST">
        <tr>
            <td>
                <h1>Welcome <?php echo $name   ?>!</h1>
            </td>
        </tr>
        <tr>
            <td>
                <a href="job.html">Add New Job</a> <br>
                <!-- <a href="regi.html">All Available Job</a> <br> -->
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </form>
</table>


</html>