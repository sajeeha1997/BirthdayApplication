<?php
session_start();
if(!isset($_SESSION["nic"]))
{
  
	header("Location:../login.php");
  
}else{		
	$nic;
}
?>
