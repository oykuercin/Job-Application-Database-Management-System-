<html>
<head> 
<title> Job Database Login (ADMIN) </title>
<link rel="stylesheet" type="text/css" href="view_candidate.css" />
</head> 
<body>

<div id="back_button">
<a href="user_panel.html"><span>Click to go to the main page</span></a>
</div>

<div id="table"> 
<?php
$con=mysqli_connect("localhost","root","","job_database");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM job");

echo "<table border='1'>
<tr>
<th>Job ID</th>
<th>Job Description</th>
<th>Expected Education</th>
<th>Expected Experience</th>
<th>Salary</th>
</tr>";



while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['j_id'] . "</td>";
echo "<td>" . $row['j_description'] . "</td>";
echo "<td>" . $row['exp_education'] . "</td>";
echo "<td>" . $row['exp_experience'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 



</body>
</html>
