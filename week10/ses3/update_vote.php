<?php
$con=mysqli_connect("localhost","root","ROOT","votedb");
$name= $_POST['candidate'];
echo $name."<br />";
$query="Update candidate ast vcount=vcount+1 where cid='$name'";
mysqli_query($con,$query)or die("Error Updating the vote");
echo "Your vote is Successful"."<br />";
?>

