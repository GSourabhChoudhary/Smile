<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['UID'];
$pass=$_POST['password'];

}
?>
<?php
$con=mysqli_connect("localhost","root","ROOT","votedb");
if($con==false)
echo"connection error".mysqli_connect_error($con);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['UID'];
$pass=$_POST['password'];
$sql="SELECT * FROM login where UID='$name'";
if($res=mysqli_query($con,$sql))
{
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{
if($row['password']!=$pass)echo"password & id not matching";
else 
{
if($row['profile']==1)
{
 header('location:add_candidate.php');
}


}
}
else echo"wrong user name";
}else echo"query cant execute";
mysqli_free_result($res);

}

?>


