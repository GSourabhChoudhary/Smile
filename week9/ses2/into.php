<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$id=$_POST["id"];
$link=mysqli_connect("localhost","root","ROOT","2016cse193");
if($link==false){
die("ERROr: could not connect.".mysqli_connect_error());
}
$sql="INSERT INTO employees(id,firstname,lastname,email)VALUES('$id','$firstname','$lastname','$email')";
if(mysqli_query($link,$sql)){
echo "Record was updated successfully.";
}else{
echo"ERROR:could not able to execute $sql."
.mysqli_error($link);
}
mysqli_close($link);
?>


