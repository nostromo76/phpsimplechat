<?php

include "baza.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	
	$sql="INSERT INTO `register`(`name`, `email`, `password`, `number`, `address`) VALUES ('".$name."','".$email."','".$password."','".$number."','".$address."')";

	$query = mysqli_query($baza,$sql);
	if($query)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location: pocetna.php');
	}
	else
	{
		echo "OOOPS sum ting wooong";
	}
	
	}
?>