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
                <input type="text" id="stxt" placeholder="Search.." onkeyup="search()">
                <input type="button" id="search" value="show"> <br>
                <div id="emp"></div>
                <a href="regi.html">Register Employer</a> <br>
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </form>
</table>
<script type="text/javascript">
    var search = function() {
        var search = document.getElementById("stxt").value;
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "log.php", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        xhttp.send("search=" + search);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("suc").innerHTML = this.responseText;
                if (this.responseText == "login Successful!") {
                    window.location.href = "home.php";
                }
            }
        };
    }
</script>

</html>