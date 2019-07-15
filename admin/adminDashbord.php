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
        <li ><span id="li_email"><?php echo $email ; ?></span></li>
    </ul>
    <br>
    <hr><br>
        <h2 style="text-align:center;">Welcome to the Birthday App  <span>Your Email :<?php echo $email ; ?></span></h2>
        <br>
        <br>
        <hr>
        <h6 style="text-align:center;">Development by dupdilan@gmail.com</h6>
</body>

</html>
