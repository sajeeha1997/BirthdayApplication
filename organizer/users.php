<?php
    // session_start();
    
    require_once('php_action/session.php'); 
     $nic=$_SESSION['nic'];
?>
<html>
<head>
    <title>Dashbord Organizers</title>
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
    <h1>Organizers Dashbord</h1>
    <hr>
    <ul>
    <li><a href="organizerDashbord.php">Dashbord</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="birthday.php">Bithday</a> </li>
        <li><a href="treat.php">treat</a></li>
        <li><a href="php_action/logout.php">Logout</a></li>
    </ul>
    <br>
    <hr>
    <h3>Add Users</h3>

    <form name="frmUsers" action="php_action/usersHandle.php" method="POST" onsubmit="return validateFrm(this);">
            <table >
                <tr>
                                                                <?php
                                                                require_once('php_action/connection.php'); 
                                                                
                                                                    $dbobj=new dbconnect();
                                                                    $con=$dbobj->getcon();
                                                                
                                                                $sql = "select MAX(userID) from users ";
                                                                            $q = mysqli_query($con,$sql);
                                                                            $row = mysqli_fetch_array($q);
                                                                        
                                                                
                                                                            $maxid = $row[0]+1;
                                                                        //echo $maxid ; 
                                                                    
                                                                        $dbobj->close();
                                                                ?>
                                                
                    <td> <label>User ID  :</label></td>
                    <td> <input id="txt_userId" name="txt_userId" type="text" readonly required value="<?php echo $maxid ?>"/>
                    </td>
                </tr>
                <tr>
                    <td> <label>First Name  :</label></td>
                    <td> <input id="txt_fname" name="txt_fname" type="text" required/>
                    </td>
                </tr>
                <tr>
                    <td><label>Last Name :</label></td>
                    <td><input id="txt_lname" name="txt_lname" type="text" required/></td>
                </tr>
                <tr>
                    <td><label>Preferred Name :</label></td>
                    <td><input id="txt_preferredName" name="txt_preferredName" type="text" /></td>
                </tr>
                <tr>
                    <td><label>Date of Birth :</label></td>
                    <td><input id="txt_dob" name="txt_dob" type="date" /></td>
                </tr>
                <tr>
                    <td><label>Official Email :</label></td>
                    <td><input id="txt_officialEmail" name="txt_officialEmail" type="email" /></td>
                </tr>
                <tr>
                    <td><label>Personal Email :</label></td>
                    <td><input id="txt_personalEmail" name="txt_personalEmail" type="email"/></td>
                </tr>
                <tr>
                    <td><label>Mobile Number :</label></td>
                    <td><input id="txt_mobile" name="txt_mobile" type="text" required/></td>
                </tr>
                <tr>
                    <td><label>FaceBook Link :</label></td>
                    <td><input id="txt_fblink" name="txt_fblink" type="text"/></td>
                </tr>
                <tr>
                    <td><label>Designation (*)  :</label></td>
                    <td><input id="txt_designation" name="txt_designation" type="text" /></td>
                </tr>
                <tr>
                    <td><label>NIC : </label></td>
                    <td><input id="txt_nic" name="txt_nic" type="text"/></td>
                </tr>
                <tr>
                    <td> <label>Student No :(*) </label></td>
                    <td><input id="txt_studentNo" name="txt_studentNo" type="text"/></td>
                </tr>
                <tr>
                    <td><label>Food Preferance : </label></td>
                    <td>
                    <select id="txt_foodSelect" onchange="convertFoodTypeToText(this)" required>
                            <option >Select Food Preferance</option>
                            <option >Veg</option>
                            <option >Non-Veg</option>
                            
                            
                        </select>
                    </td>
                </tr>
                <input type="hidden" id="txt_food" name="txt_food"/>
                <tr>
                    <td><label>Note : </label></td>
                    <td><textarea id="txt_note" name="txt_note" ></textarea></td>
                </tr>
                <tr>
                    <td><label>User Type : </label></td>
                    <td>
                        <select id="txt_userSelect" onchange="convertuserTypeToText(this)" required>
                            <option >Select User Type</option>
                            <option >Student</option>
                            <option >Administrative Staff</option>
                            <option >Temporry Staff</option>
                            <option >Academic Staff</option>
                            
                        </select>
                    </td>
                    <input type="hidden" id="txt_userType" name="txt_userType"/>
                </tr>

                </table>
                    <button type="submit" id="btnAdd" name="btnAdd"  value="add">Add Users</button>
                    
                    <button type="submit" id="btnUpdate" name="btnUpdate" value="update">Update Users</button>
                    <button type="submit" id="btnDelete" name="btnDelete" value="delete">Delete Users</button>
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
        <!--convert to text values after user select the selection box-->
        <script  type="text/javascript">
										
										function convertFoodTypeToText(ddl) {
                                         document.getElementById('txt_food').value = ddl.options[ddl.selectedIndex].text;
                                                                }
                                        function convertuserTypeToText(ddl) {
                                         document.getElementById('txt_userType').value = ddl.options[ddl.selectedIndex].text;
                                                                }
	
		</script>
       <p> If you want to update or delete users you can click the view table for each row and get values </p>
        <hr>
    <h3>View Users</h3>
    <div>
            <?php
                                 
             require_once("php_action/viewusers.php");
                            
            ?>
    </div>

    <hr>
        <h3>List of Users Ascending Order of the Birthday</h3>
        <div>
                                <?php
                                 
                                 require_once("php_action/viewusersAsc.php");
                                                
                                ?>
        </div>
   <script>
       function validateFrm(form){
        
           if(form.txt_mobile.value.length !=10){
               alert("your mobile number is wrong please check that!")
               form.txt_mobile.focus();
                 return false;         
           }
           if(form.txt_nic.value != "") {
            if(form.txt_nic.value.length == 10){
                alert("Error: NIC must contain at least 10 characters!");
                form.txt_nic.focus();
            return false;
      }
        if(form.txt_note.value != "") {
            if(form.txt_note.value.length>= 200){
                alert("Error: note support only 200 characters!");
                form.txt_note.focus();
            return false;
      }
       }
    </script>
<!--Listeners-->
        <script>
document.querySelectorAll('#tableUsersAll tr').forEach(e=>e.addEventListener("click",function(){
    //  console.log("clicked");
   if(this.rowIndex > 0){
        var userId=this.cells[0].innerHTML;
        var firstName=this.cells[1].innerHTML;
        var lastName=this.cells[2].innerHTML;
        var preferredName=this.cells[3].innerHTML;
        var dateofBirth=this.cells[4].innerHTML;
        var OfficialEmail=this.cells[5].innerHTML;
        var personalEmail=this.cells[6].innerHTML;
        var mobile=this.cells[7].innerHTML;
        var facebookLink=this.cells[8].innerHTML;
        var designation=this.cells[9].innerHTML;
        var nic=this.cells[10].innerHTML;
        var studentNo=this.cells[11].innerHTML;
        var food=this.cells[12].innerHTML;
        var note=this.cells[13].innerHTML;
        var usertype=this.cells[14].innerHTML;
        // console.log(userId);
        document.forms['frmUsers']['txt_userId'].value = userId;
        document.forms['frmUsers']['txt_fname'].value = firstName;
        document.forms['frmUsers']['txt_lname'].value = lastName;
        document.forms['frmUsers']['txt_preferredName'].value = preferredName;
        document.forms['frmUsers']['txt_dob'].value = dateofBirth;
        document.forms['frmUsers']['txt_officialEmail'].value = OfficialEmail;
        document.forms['frmUsers']['txt_personalEmail'].value = personalEmail;
        document.forms['frmUsers']['txt_mobile'].value = mobile;
        document.forms['frmUsers']['txt_fblink'].value = facebookLink;
        document.forms['frmUsers']['txt_designation'].value = designation;
        document.forms['frmUsers']['txt_nic'].value = nic;
        document.forms['frmUsers']['txt_studentNo'].value = studentNo;
        if(food=='Veg'){
            selectI=1;
        }
        if(food=='Non-Veg'){
            selectI=2;
        }
        document.forms['frmUsers']['txt_foodSelect'].options.selectedIndex =selectI;
        document.forms['frmUsers']['txt_note'].value = note;
        if(usertype=='Student'){
            userty=1;
        }
        if(usertype=='Administrative Staff'){
            userty=2;
        }
        if(usertype=='Temporry Staff'){
            userty=3;
        }
        if(usertype=='Academic Staff'){
            userty=4;
        }
        document.forms['frmUsers']['txt_userSelect'].options.selectedIndex =userty ;
        
       
    }
   
}));
</script>
</body>
</html>
