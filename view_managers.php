<html>
<head> 
<title> Managers </title>
<link rel="stylesheet" type="text/css" href="view_managers.css" />
</head> 
<body>

<div id="back_button">
<a href="user_panel.html"><span>Click to go to the main page</span></a>
</div>



</body>
</html>

<div id="table"> 
<?php
$con=mysqli_connect("localhost","root","","job_database");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM manager");

echo "<table border='1'>
<tr>
<th>Manager Name</th>
<th>Manager ID</th>
<th>Salary Budget</th>
<th>Department</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['m_name'] . "</td>";
echo "<td>" . $row['m_id'] . "</td>";
echo "<td>" . $row['s_budget'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 