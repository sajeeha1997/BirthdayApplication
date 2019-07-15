<html>
<head>
    <title>Login Admin</title>
</head>
<body>
    <div align="center">
    <h1>Login Admin Only</h1>
    <h3>Please Input Your Details</h3>
    <table>
    <form action="php_action/loginHandleAdmin.php" method="POST">
               <tr> 
                   <td><label>Email : </label></td>
                    <td><input type="email" id="txt_email" name="txt_email" placeholder="Input Email"/><td>
               </tr>
               <tr>
                <td><label>Password : </label></td>
                <td><input type="password" id="txt_password" name="txt_password" placeholder="Input Password"/></td>
               </tr>
                
              <tr>
                <td><button name="btnSubmit" type="submit">Login</button></td>
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
                    <tr>
                    <td><a href="login.php"><button>Back</button></a></td>
                    </tr>
    </table>
    </div>

</body>

</html>
