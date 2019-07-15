<?php
    // session_start();
    
    require_once('php_action/session.php'); 
     $nic=$_SESSION['nic'];
?>
<html>
<head>
    <title>Dashbord User</title>
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
            width: 15%;
        }
        #li_nic{
            padding: 100px;
        }
    </style>
</head>
<body>
    <h1>Users Dashbord</h1>
    <hr>
    <ul>
        <li><a href="userDashbord.php">Dashbord</a></li>
        <li><a href="birthday.php">Birthday</a></li>
        <li><a href="treat.php">Treat</a> </li>
        <li><a href="changeMypassword.php">Change Password</a> </li>
        <li ><span id="li_nic"><?php echo $nic ; ?></span></li>
        <li><a href="php_action/logout.php">Logout</a></li>
    </ul>
    <br>
    <hr><br>
        <h3>Change the password</h3>


        <form name="frmTreat" action="php_action/changePassowrdHandle.php" method="POST" onsubmit="return passwordValidate(this);">
            <table >
                <tr>
                    <input id="txt_nic" id="txt_nic" type="hidden" value="<?php echo $nic;  ?>"/>             
                    <td> <label>Current Password  :</label></td>
                    <td> <input id="txt_currentPw" name="txt_currentPw" type="password"  required />
                    </td>
                </tr>
                <tr>
                <td> <label>New Password  :</label></td>
                    <td> <input id="txt_newPw" name="txt_newPw" type="password"  required />
                    </td>
                </tr>
                <tr>
                <td> <label>Confirm Password(re-enter)  :</label></td>
                    <td> <input id="txt_newRPw" name="txt_newRPw"  type="password"  required />
                    </td>
                </tr>
            
                </table>
                    <button type="submit" id="btnAdd" name="btnAdd"  value="add">Change Password</button>
                    <button type="reset">Reset</button><br>
   

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

        <script>
       function passwordValidate(form){
        
           if(form.txt_newPw.value !== form.txt_newRPw.value){
               alert("your password doesnt match!!!")
               form.txt_newPw.focus();
                 return false;         
           }
          
       }
    </script>

</body>

</html>
