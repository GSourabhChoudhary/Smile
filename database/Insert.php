<?php
session_start();
include('configure.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
	$id=$_POST['id'];
	$college=$_POST['college'];
	$dept=$_POST['dept'];
	$query=mysqli_query($bd,"insert into students(name,id,college,department) values('$name','$id','$college','$dept')");
if($query)
{
	$results=mysqli_query($bd,"SELECT * from students");
	while($row=mysqli_fetch_array($results))
	{
		$n=$row['name'];
		$i=$row['id'];
		$c=$row['college'];
		$d=$row['department'];

		echo "name:".$n."<br>";
		echo "id:".$i."<br>";
		echo "department:".$c."<br>";
		echo "college:".$d."<br><br><br>";
	}
}
else
{
echo"please check some thing went wrong";
}
}
else
{
echo "you cant";
}
?>



