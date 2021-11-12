<?php

$servername = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "jour08";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result1 = mysqli_query($con,"SELECT nom  FROM salles WHERE salles" );
$result2 = mysqli_query($con,"SELECT nom  FROM etage");

echo "<table border='1'>
<tr>
<th>nom salle</th>
<th>nom étage</th>
</tr>";

while($row1 = mysqli_fetch_array($result1) && $row2 = mysqli_fetch_array($result2))
{
echo "<tbody>";
echo "<tr>";
echo "<td>" . $row1['nom'] . "</td>";
echo "<td>" . $row2['nom'] . "</td>";
echo "</tr>";
echo "</tbody>";
}
echo "</table>";

mysqli_close($con);
?>