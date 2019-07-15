<?php
	include("connection.php");
    
    $treatId=$_POST["txt_treatId"];
    $date=$_POST["txt_date"];
    $time=$_POST["txt_time"];
    $venue=$_POST["txt_venue"];
    $note=$_POST["txt_treatNote"];
    $treatStatus="pending";
    
//add users handle
    if($_POST["btnAdd"]=='add') {   
        
        
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="INSERT INTO treat(treat_Id,treatDate,treatTime,venue,notes,treatStatus) VALUES('$treatId','$date','$time','$venue','$note','$treatStatus')";
	
	//executting the sql message
	$result=mysqli_query($con,$sql) or die("This Treat ID is Already added please try another".mysqli_error());
	
	if($result==true)
	{
        
        echo'alert("SUCCESS!!!!")';
		header("Location:../treat.php?success=1");
        
	}else{
        echo'alert("Fail!!!!")';
		header("Location:../treat.php?error=1");
        
    }
    }
    $dbobj->close();
?>
