<?php
    // session_start();
    
    require_once('php_action/session.php'); 
     $email=$_SESSION['email'];
?>
<html>
<head>
    <title>Dashbord Admin</title>
    <style >
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline;
            float: left;
            width: 60px;
            border: 1px solid ;
            width: 18%;
        }
    </style>
</head>
<body>
    <h1>Admin Dashbord</h1>
    <hr>
    <ul>
        <li ><a href="adminDashbord.php">Dashbord</a></li>
        <li><a href="organizingTeam.php">Organizing Team</a></li>
        <li><a href="users.php">Users</a> </li>
        
        <li><a href="php_action/logout.php">Logout</a></li>
    </ul>
    <br>
    <hr><br>
       <h3>Organizing Team</h3>
       <b><span>Organizer role should be assigned Tempory Acadamic staff or Acadamic staff members only  </span></b><br>
       <br>
        <table>
       <form name="frmUsersRole" action="php_action/organizer.php" method="post">
       
                <tr> 
                   <td><label>User ID: </label></td>
                    <td><input type="type" id="txt_userId" name="txt_userId" placeholder="click user table " readonly /><td>
               </tr>
               <tr> 
                   <td><label>NIC: </label></td>
                    <td><input type="type" id="txt_nic" name="txt_nic" placeholder="click user table" readonly /><td>
               </tr>
               <tr> 
                   <td><label>User Type: </label></td>
                    <td><input type="type" id="txt_userType" name="txt_userType" placeholder="click user table " readonly /><td>
               </tr>
               <tr> 
                   <td><label>Organizing Role: </label></td>
                    <td><input type="type" id="txt_userRole" name="txt_userRole" onchange="validateType();" placeholder="you have to input 1 or 0 "/><td>
               </tr>
               <tr>
                <td><button name="btnSubmit" id="btnSubmit"  type="submit" value="update">Update Organizing Role</button></td>
                <td><button type="reset">Reset</button></td>
                
              </tr>
              
              <?php
                                                                    if(isset($_GET["error"]))
                                                                        {
                                                                        $error=$_GET["error"];
                                                                        if($error==1)
                                                                            {
                                                                            echo("<font color='red'>Error</font>");
                                                                            }
                                                                        }
			                                                            ?>
                                                                         <?php
                                                                            if(isset($_GET["success"]))
                                                                                {
                                                                                $error=$_GET["success"];
                                                                                if($error==1)
                                                                                    {
                                                                                    echo("<font color='red'>Successfully</font> ");
                                                                                    }
                                                                                }
			                                                            ?>

       </form>
        </table>
        <span>Click table rows to Update the Organizing role </span>
        <br>
        <hr>
        <h3> View Users </h3>
        <div>
            <?php
                                 
             require_once("php_action/viewUsersRole.php");
                            
            ?>
    </div>
<script>
    function validateType(){
        var type=document.getElementById('txt_userType').value;
        if (type=='Student'){
            alert("you Cannot add student as a Organizer!!!")
        }
    }
</script>

<!--Listeners-->
<script>
document.querySelectorAll('#tableUsersRole tr').forEach(e=>e.addEventListener("click",function(){
    //  console.log("clicked");
   if(this.rowIndex > 0){
        var userId=this.cells[0].innerHTML;
        var nic=this.cells[1].innerHTML;
        var type=this.cells[2].innerHTML;
        var role=this.cells[3].innerHTML;
        
        // console.log(userId);
        document.forms['frmUsersRole']['txt_userId'].value = userId;
        document.forms['frmUsersRole']['txt_nic'].value = nic;
        document.forms['frmUsersRole']['txt_userType'].value = type;
        document.forms['frmUsersRole']['txt_userRole'].value = role;
       
    }
   
}));
</script>

</body>

</html>
