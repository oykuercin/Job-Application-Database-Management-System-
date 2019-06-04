<?php


$link =mysqli_connect("localhost","root","","job_database");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$c_id=$_POST['c_id']; //this is what we get from the form.
$c_name=$_POST['c_name'];
$c_adress=$_POST['c_adress'];
$c_age=$_POST['c_age'];
$sex=$_POST['sex'];
$exp_salary=$_POST['exp_salary'];
$c_education=$_POST['c_education']; 
$com_name=$_POST['com_name'];
$w_position=$_POST['w_position'];
$w_period=$_POST['w_period'];
$prev_salary=$_POST['prev_salary'];
$j_experience=$_POST['j_experience'];

$res=mysqli_query($link,"INSERT INTO candidate(c_id, c_name, c_adress, c_age, sex, exp_salary, c_education, com_name, w_position, w_period, prev_salary, j_experience) VALUES ('$c_name','$c_adress',$c_id,'$c_age','$sex','$exp_salary','$c_education','$com_name','$w_position','$w_period','$prev_salary','$j_experience');
");


if($res==false){
	echo "<script> alert('ERROR');</script>";
}

header('Location: candidate.php');
exit;