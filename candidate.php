<html>
<head> 
<title> Job Database Login (ADMIN) </title>
<link rel="stylesheet" type="text/css" href="candidate.css" />
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

$result = mysqli_query($con,"SELECT * FROM candidate");
echo "Candidate";
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

<div id="form"> 
<h3> Add Candidate</h3> 
<form action='add_candidate.php' method=POST>

<b> Candidate ID: </b>
<input type='text' name='c_id'> 
<br>
<br>
<b> Candidate Name: </b>
<input type='text' name='c_name'> 
<br>
<br>
<b> Candidate Address: </b>
<input type='text' name='c_adress'> 
<br>
<br>
<b> Candidate Age: </b>
<input type='text' name='c_age'> 
<br>
<br>
<b> Sex: </b>
<input type='text' name='sex'> 
<br>
<br>
<b> Expected Salary: </b>
<input type='text' name='exp_salary'> 
<br>
<br>
<b> Candidate Education: </b>
<input type='text' name='c_education'> 
<br>
<br>
<b> Company Name: </b>
<input type='text' name='com_name'> 
<br>
<br>
<b> Working Position: </b>
<input type='text' name='w_position'> 
<br>
<br>
<b> Working Period: </b>
<input type='text' name='w_period'> 
<br>
<br>
<b> Previous Salary: </b>
<input type='text' name='prev_salary'> 
<br>
<br>
<b> Job Experience: </b>
<input type='text' name='j_experience'>
<br>
<br>
<input type='submit' value="Submit">
<br>
</form>
</div> 


</body>
</html>
