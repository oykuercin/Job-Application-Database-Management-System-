<?php


$link =mysqli_connect("localhost","root","","job_database");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$userid=$_POST['userid']; //this is what we get from the form.
$password=$_POST['password'];

$res=mysqli_query($link,"SELECT* FROM login_manager WHERE userid='$userid' ");


$db_result=mysqli_fetch_array($res);

if($db_result==NULL)
{
	echo "<script> alert('The user id does not exist');</script>";
	header("Refresh:0, url=job_database_login.html");
}
else{
	if($db_result['password']!=$password){
	
	echo "<script> alert('The password is incorrect');</script>";
	header("Refresh:0, url=job_database_login.html");
	
	
	}else{
		
		
		header("Refresh:0, url=manager_panel.html");
		echo "<script> alert('You are logged in');</script>";
	}
}