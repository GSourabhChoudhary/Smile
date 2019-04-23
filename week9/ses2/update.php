<?php
$link=mysqli_connect("localhost","root","ROOT","2016cse193");
if($link==false){
die("ERROr: could not connect."
.mysqli_connect_error());
}
$sql="UPDATE employees SET email='d@z.com' WHERE id='25'";
if(mysqli_query($link,$sql)){
echo "Record was updated successfully.";
}else{
echo"ERROR:could not able to execute $sql."
.mysqli_error($link);
}
mysqli_close($link);
?>

