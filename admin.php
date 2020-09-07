<?php

$name = $_POST['search'];

$con = mysqli_connect('localhost', 'root', '', 'final');
$sql = "select * from user where uName like '%{$name}%'";

$result = mysqli_query($con, $sql);

$data = "<table border=1>
                <tr>
                    <td>Employer Name</td>
					<td>Company Name</td>
					<td>Contact No</td>
					<td>User Name</td>
				</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $data .= "<tr>
					<td>{$row['eName']}</td>
					<td>{$row['cName']}</td>
					<td>{$row['cNo']}</td>
                    <td>{$row['uName']}</td>
				</tr>";
}
$data .= "</table>";

echo $data;
