<?php

include "baza.php";
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($baza,$sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Sum ting gone wong";
	}
	
	}
?>