<?php


$link =mysqli_connect("localhost","root","","job_database");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$j_id=$_POST['j_id']; //this is what we get from the form.
$j_description=$_POST['j_description'];
$exp_education=$_POST['exp_education'];
$exp_experience=$_POST['exp_experience'];
$salary=$_POST['salary'];

$res=mysqli_query($link,"INSERT INTO job (j_id, j_description, exp_education, exp_experience, salary) VALUES ('$j_description', $j_id, '$exp_education', '$exp_experience', '$salary');");


if($res==false){
	echo "<script> alert('ERROR');</script>";
}


header('Location: view_jobs.php');
exit;