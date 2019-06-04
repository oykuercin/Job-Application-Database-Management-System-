<html>
<head> 
<title> Managers (ADMIN) </title>
<link rel="stylesheet" type="text/css" href="manager.css" />
</head> 
<body>

<div id="back_button">
<a href="manager_panel.html"><span>Click to go to the main page</span></a>
</div>

<div id="text"> 
<h3> Managers </h3> 
<form action='add_manager.php' method=POST>

<b> Manager Name: </b>
<input type='text' name='m_name'> 
<br>
<br>
<b> Manager ID: </b>
<input type='text' name='m_id'> 
<br>
<br>
<b> Salary Budget: </b>
<input type='text' name='s_budget'> 
<br>
<br>
<b> Department: </b>
<input type='text' name='department'> 
<br>
<br>
<input type='submit' value="Submit">
<br>
</form>
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