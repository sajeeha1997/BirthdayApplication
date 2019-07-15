<?php
	include("connection.php");
    
    $userId=$_POST["txt_userId"];
	$nic=$_POST["txt_nic"];
	$type=$_POST["txt_userType"];
    $role=$_POST["txt_userRole"];
	
//Update user organizer
	if($_POST["btnSubmit"]=='update') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="UPDATE users SET organizingRole='$role' WHERE userID='$userId' AND userType != 'Student' ";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This User ID is Already updated please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../organizingTeam.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../organizingTeam.php?error=1");
    }
    }
		$dbobj->close();
?>
