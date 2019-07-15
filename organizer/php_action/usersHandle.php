<?php
	include("connection.php");
    
    $userId=$_POST["txt_userId"];
    $firstName=$_POST["txt_fname"];
    $lastName=$_POST["txt_lname"];
    $preferredName=$_POST["txt_preferredName"];
    $dateofBirth=$_POST["txt_dob"];
    $OfficialEmail=$_POST["txt_officialEmail"];
    $personalEmail=$_POST["txt_personalEmail"];
    $mobile=$_POST["txt_mobile"];
    $facebookLink=$_POST["txt_fblink"];
    $designation=$_POST["txt_designation"];
    $nic=$_POST["txt_nic"];
    $studentNo=$_POST["txt_studentNo"];
    $food=$_POST["txt_food"];
    $note=$_POST["txt_note"];
    $usertype=$_POST["txt_userType"];
	
    
    
    
//add users handle
    if($_POST["btnAdd"]=='add') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="INSERT INTO users(userId,firstName,lastName,perferredName,dateOfBirthday,officialEmail,personalEmail,mobile,facebookLink,designaion,nic,studentNo,foodPreference,note,userType ) VALUES('$userId','$firstName','$lastName','$preferredName','$dateofBirth','$OfficialEmail','$personalEmail','$mobile','$facebookLink','$designation','$nic','$studentNo','$food','$note','$usertype')";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This user ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../users.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../users.php?error=1");
        
    }
    }
//Update user handle
	else if($_POST["btnUpdate"]=='update') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="UPDATE users SET firstName='$firstName',lastName='$lastName',perferredName='$preferredName' ,dateOfBirthday='$dateofBirth',officialEmail='$OfficialEmail',personalEmail='$personalEmail',mobile='$mobile',facebookLink='$facebookLink',designaion='$designation',nic='$nic',studentNo='$studentNo',note='$note',userType='$usertype' WHERE userID='$userId'  ";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This User ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../users.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../users.php?error=1");
    }
    }
	//delete user Handle
	else if($_POST["btnDelete"]=='delete') {   
	
		$dbobj=new dbconnect();
		$con=$dbobj->getcon();
		
		$sql="DELETE FROM users WHERE userId='$userId'";
		
		//executting the sql message
		$result=mysqli_query($con,$sql)or die("This user ID is not detected please try another".mysqli_error());
		
		if($result==true)
		{
            echo'alert("SUCCESS!!!!")';
            header("Location:../users.php?success=1");
		}else{
            echo'alert("Fail!!!!")';
            header("Location:../users.php?error=1");
		}
		
	
		}
		$dbobj->close();
?>
