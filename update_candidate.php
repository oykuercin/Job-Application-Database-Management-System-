<?php


$link =mysqli_connect("localhost","root","","job_database");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

//this is what we get from the form.
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

$res=mysqli_query($link,"UPDATE candidate SET c_name='noname',c_adress='noadress',c_id=1, c_age='noage', sex='nosex',exp_salary='noexpsalary',c_education='noceducation',com_name='nocomname',w_position='nowposition',w_period='nowperiod,prev_salary='noprevsalary',j_experience='nojexperience' WHERE c_name='noname' AND c_adress='noadress' AND c_id=1 AND c_age='noage' AND sex='nosex' AND exp_salary='noexpsalary' AND c_education='noceducation' AND com_name='nocomname'AND w_position='nowposition' AND w_period='nowperiod AND prev_salary='noprevsalary' AND j_experience='nojexperience';");


if($res==false){
	echo "<script> alert('ERROR');</script>";
}

header('Location: candidate.php');
exit;