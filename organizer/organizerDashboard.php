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
            width: 15%;
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
        <li ><span id="li_nic"><?php echo $nic ; ?></span></li>
    </ul>
    <br>
    <hr><br>
        <h2 style="text-align:center;">Welcome to the Birthday App <span>Your NIC :<?php echo $nic ; ?></span></h2>
        <br>
        <br>
        <hr>
        <h6 style="text-align:center;">Development by dupdilan@gmail.com</h6>
</body>

</html>
