<html>
<head> 
<title> Rooms (ADMIN) </title>
<link rel="stylesheet" type="text/css" href="view_jobs.css" />
</head> 
<body>

<div id="back_button">
<a href="manager_panel.html"><span>Click to go to the manager panel</span></a>
</div>


<div id="text"> 
<h3> Add New Job </h3> 
<form action='add_job.php' method=POST>

<b> Job ID: </b>
<input type='text' name='j_id'> 
<br>
<br>
<b> Job Description: </b>
<input type='text' name='j_description'> 
<br>
<br>
<b> Expected Education: </b>
<input type='text' name='exp_education'> 
<br>
<br>
<b> Expected Experience: </b>
<input type='text' name='exp_experience'> 
<br>
<br>
<b> Salary: </b>
<input type='text' name='salary'> 
<br>
<br>
<input type='submit' value="Submit">
<br>
</form>
</div> 


<div id="room_avail"> 
<h3> Change Job Availability Status </h3>
<form action='update_candidate.php' method=POST>
<b> Job ID: </b>
<input type='text' name='j_id'> 
<br>
<br>
<b> Job Description: </b>
<input type='text' name='j_description'> 
<br>
<br>
<b> Expected Education: </b>
<input type='text' name='exp_education'> 
<br>
<br>
<b> Expected Experience: </b>
<input type='text' name='exp_experience'> 
<br>
<br>
<b> Salary: </b>
<input type='text' name='salary'> 
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