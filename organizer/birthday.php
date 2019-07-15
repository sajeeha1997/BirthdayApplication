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
    <h3>Today birthday</h3>
            <div>
                    <?php
                                 
                        require_once("php_action/todayBirthday.php");
                                                
                    ?>
            </div>
    <hr>
    <h3>Tomorrow birthday</h3>
            <div>
                    <?php
                                 
                        require_once("php_action/tomorrowBirthday.php");
                                                
                    ?>
            </div>

    <hr>
    <h3>Day after Tomorrow birthday</h3>
            <div>
                    <?php
                                 
                        require_once("php_action/dayaftertomorrowBirthday.php");
                                                
                    ?>
            </div>
    <hr>
    <h3>This Week birthday</h3>
    <div>
                    <?php
                                 
                        require_once("php_action/thisWeekBirthday.php");
                                                
                    ?>
            </div>

    <hr>
    <h3>Next Week birthday</h3>
    <div>
                    <?php
                                 
                        require_once("php_action/nextWeekBirthday.php");
                                                
                    ?>
            </div>

    <hr>
    <h3>Next Month birthday</h3>
    <div>
                    <?php
                                 
                        require_once("php_action/nextmonthBirthday.php");
                                                
                    ?>
            </div>
    
    
    <hr>
    




</body>

</html>
