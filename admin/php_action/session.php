<?php
session_start();
if(!isset($_SESSION["email"]))
{
  
	header("Location:../loginAdmin.php");
  
}else{		
	$email;
}
?>
