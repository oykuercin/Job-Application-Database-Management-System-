<html>
<head> 
<title> Job Database Login (ADMIN) </title>
<link rel="stylesheet" type="text/css" href="view_candidate.css" />
</head> 
<body>

<div id="back_button">
<a href="manager_panel.html"><span>Click to go to the main page</span></a>
</div>

<div id="table"> 
<?php
$con=mysqli_connect("localhost","root","","job_database");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM candidate");
echo "Candidates";
echo "<table border='1'>
<tr>
<th>Candidate ID</th>
<th>Candidate Name</th>
<th>Candidate Address</th>
<th>Candidate Age</th>
<th>Sex</th>
<th>Expected Salary</th>
<th>Candidate Education</th>
<th>Company Name</th>
<th>Working Position</th>
<th>Working Period</th>
<th>Previous Salary</th>
<th>Job Experience</th>
</tr>";


while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['c_name'] . "</td>";
echo "<td>" . $row['c_adress'] . "</td>";
echo "<td>" . $row['c_age'] . "</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['exp_salary'] . "</td>";
echo "<td>" . $row['c_education'] . "</td>";
echo "<td>" . $row['com_name'] . "</td>";
echo "<td>" . $row['w_position'] . "</td>";
echo "<td>" . $row['w_period'] . "</td>";
echo "<td>" . $row['prev_salary'] . "</td>";
echo "<td>" . $row['j_experience'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 



</body>
</html>

