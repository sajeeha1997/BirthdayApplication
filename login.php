<html>
<head>
    <title>Login</title>
</head>
<body>
    <div align="center">
    <h1>Login</h1>
    <h3>Please Input Your Details</h3>
    <table>
    <form action="php_action/loginHandle.php" method="POST">
               <tr> 
                   <td><label>NIC : </label></td>
                    <td><input type="type" id="txt_nic" name="txt_nic" placeholder="Input NIC"/><td>
               </tr>
               <tr>
                <td><label>Password : </label></td>
                <td><input type="password" id="txt_password" name="txt_password" placeholder="Input Password"/></td>
               </tr>
               <!--
               <tr>
                    <td><label>User Type : </label></td>
                    <td>
                    <select onchange="convertUserTypeToText(this)" required>
                            <option >Select User Type</option>
                            <option >Normal User</option>
                            <option >Organizer</option>    
                        </select>
                    </td>
                </tr>
-->
                <input id="txt_UserType" name="txt_UserType" type="hidden"/>
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
                        <td>
                            <a href="loginAdmin.php"><button >Admin Login</button></a>
                        </td>
                    </tr>
    </table>
    </div>

    <script  type="text/javascript">
										
										function convertUserTypeToText(ddl) {
                                         document.getElementById('txt_UserType').value = ddl.options[ddl.selectedIndex].text;
                                                                }
                                        
		</script>

</body>

</html>
