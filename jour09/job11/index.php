<?php

$servername = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "jour08";
$tablename = "salles";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT avg(capacite) as total from salles");
$data = mysqli_fetch_assoc($result) ;
    echo "<table border='1'>
    <tr>
    <th>capacite_moyenne<th>
    </tr>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $data['total'] . "</td>" ;
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

?>