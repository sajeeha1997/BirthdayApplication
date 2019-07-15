<?php
session_start();
require("connection.php");
if(isset($_POST["btnSubmit"]))
{
	$nic=$_POST["txt_nic"];
	$password=$_POST["txt_password"];
    // $uty=$_POST["txt_UserType"];
    
	
	$dbobj=new dbconnect();
	$con=$dbobj->getcon();
	
	$sql="SELECT * FROM users WHERE nic='$nic' AND password='$password' ";
	$res=mysqli_query($con,$sql)or die("Can not connect with the table ".mysqli_error());
    
	$nor=mysqli_num_rows($res);
    
	if($nor>0)
	{
		$rec=mysqli_fetch_Array($res);	
		$organizer=$rec["organizingRole"];
		
            if($organizer=='1')
            {	//organizer DashBoard
                
				// //Creating sessions and storing values
				
				 $_SESSION['nic']=$nic;
				header("Location:../organizer/organizerDashbord.php");
			}
			elseif($organizer=='0'){
                //User Dahsbord
				// //Creating sessions and storing values
					$_SESSION["nic"]=$nic;
				header("Location:../user/userDashbord.php");
			}
			else{
				 header("Location:../login.php?error=1");
				
			}
			
	}
	else
	{
		header("Location:../login.php?error=1");
	}
	
	
}
?>
