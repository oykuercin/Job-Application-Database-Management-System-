<?php


$link =mysqli_connect("localhost","root","","job_database");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$m_name=$_POST['m_name']; //this is what we get from the form.
$m_id=$_POST['m_id'];
$s_budget=$_POST['s_budget'];
$department=$_POST['department'];


$res=mysqli_query($link,"INSERT INTO manager (m_name, m_id, s_budget, department) VALUES ('$m_name', '$m_id','$s_budget','$department');");


if($res==false){
	echo "<script> alert('ERROR');</script>";
}

header('Location: manager.php');
exit;