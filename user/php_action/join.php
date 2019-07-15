<?php
$data=$_POST['val'];
$status =explode('-',$data);
$treatId=$status[1];
if($status[0]=='btnJoin'){
    $value='join';
    header("Refresh:0; url=treat.php");
} else if($status[0]=='btnCancel'){
    $value='cancel';
    header("Refresh:0; url=treat.php");
}
    
  $conn = mysqli_connect('localhost', 'root', '', 'birthdays') or die('ERROR: Cannot Connect='.mysql_error($conn));
 mysqli_query($conn,"INSERT INTO listofjoin(treat_Id,status_join) values('$treatId','$value')");
?>
