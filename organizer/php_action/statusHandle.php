<?php
$data=$_POST['val'];
$status =explode('-',$data);
$treatId=$status[1];
if($status[0]=='btnConfirmed'){
    $value='confirmed';
    header("Refresh:0; url=treat.php");
}
elseif($status[0]=='btnCelebrated'){
    $value='celebrated';
    header("Refresh:0; url=treat.php");
}elseif($status[0]=='btnCancelled'){
    $value='cancelled';
    header("Refresh:0; url=treat.php");
}
    
  $conn = mysqli_connect('localhost', 'root', '', 'birthdays') or die('ERROR: Cannot Connect='.mysql_error($conn));
 mysqli_query($conn,"UPDATE treat set treatStatus='$value' WHERE treat_Id='$treatId'");
?>
