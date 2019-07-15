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
    <h3>Treat</h3>
    
    <form name="frmTreat" action="php_action/TreatHandle.php" method="POST" onsubmit="return validateFrm(this);">
            <table >
                <tr>
                                                                <?php
                                                                require_once('php_action/connection.php'); 
                                                                
                                                                    $dbobj=new dbconnect();
                                                                    $con=$dbobj->getcon();
                                                                
                                                                $sql = "select MAX(treat_Id) from treat ";
                                                                            $q = mysqli_query($con,$sql);
                                                                            $row = mysqli_fetch_array($q);
                                                                        
                                                                            $maxid = $row[0]+1;
                                                                        //echo $maxid ; 
                                                                    
                                                                        $dbobj->close();
                                                                ?>
                                                
                    <td> <label>Treat ID  :</label></td>
                    <td> <input id="txt_treatId" name="txt_treatId" type="text" readonly required value="<?php echo $maxid ?>"/>
                    </td>
                </tr>
                <tr>
                    <td> <label>Date  :</label></td>
                    <td> <input id="txt_date" name="txt_date" type="date" required/>
                    </td>
                </tr>
                <tr>
                    <td><label>Time :</label></td>
                    <td><input id="txt_time" name="txt_time" type="time" required/></td>
                </tr>
                <tr>
                    <td><label>Venue :</label></td>
                    <td><input id="txt_venue" name="txt_venue" type="text" required/></td>
                </tr>
                <tr>
                    <td><label>Notes :</label></td>
                    <td><input id="txt_treatNote" name="txt_treatNote" type="text" required/></td>
                </tr>
            
                </table>
                    <button type="submit" id="btnAdd" name="btnAdd"  value="add">Add Treat</button>
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

    <br>
    <hr>
<h3>Upcomming Treats</h3>
    <div>
            <?php
                                 
             require_once("php_action/upcomingTreat.php");
                            
            ?>
    </div>

<br>
<hr>
<h3>Passed Treats</h3>
<div>
            <?php
                                 
             require_once("php_action/passedTreat.php");
                            
            ?>
    </div>
                                <script>
                                    function statusChange(id){
                                        trid=id.split('-')[1];
                                        //alert(trid);
                                        $.ajax({
                                            url: "php_action/statusHandle.php",
                                            type:"post",
                                            data:{ val : id },
                                            success: function(result){
                                               // alert(result);
                                               
                                               //$('table#sHold tr#'+trid).remove();
                                                alert('Updated the Status');
                                                location.reload();
                                        }
                                        });
                                    }
                                    
                                </script>
                               



                               <script>
       function validateFrm(form){
        
          
        if(form.txt_treatNote.value != "") {
            if(form.txt_treatNote.value.length>= 1000){
                alert("Error: note support only 1000 characters!");
                form.txt_treatNote.focus();
            return false;
      }
       }
    </script>
<script>
    // //disable button after click at ones
    // document.querySelectorAll('.btn_sub').addEventistner("click",function(){
    //     console.log("tetsghsj");
    // });
</script>
    <script src="../asset/jquery-3.2.1.min.js"></script>
</body>
</html>
