<?php
session_start();
require("connection.php");
if(isset($_POST["btnSubmit"]))
{
	$email=$_POST["txt_email"];
	$password=$_POST["txt_password"];
    // $uty=$_POST["txt_UserType"];
    
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="SELECT * FROM adminlogin WHERE email='$email' AND password='$password' ";
	$res=mysqli_query($con,$sql)or die("Can not connect with the table ".mysqli_error());
    
	$nor=mysqli_num_rows($res);
    
	if($nor>0)
	{
        $rec=mysqli_fetch_Array($res);	
        $_SESSION['email']=$email;
		header("Location:../admin/adminDashbord.php");
			
	}
	else
	{
		header("Location:../loginAdmin.php?error=1");
	}
	
	
}
?>
