<?php
	include("connection.php");
    
    $nic=$_POST["txt_nic"];
    $curentpw=$_POST["txt_currentPw"];
    $password=$_POST["txt_newRPw"];
    
    
//Update Password
    if($_POST["btnAdd"]=='add') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="UPDATE users SET password='$password' where nic='$nic' AND password='$curentpw' ";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This user ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../changeMypassword.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../changeMypassword.php?error=1");
        
    }
    }
    $dbobj->close();
?>
