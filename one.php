<?php
session_start();
	if(isset($_SESSION['pgvisit']))
	{
		$_SESSION['pgvisit']=$_SESSION['pgvisit']+1;
		if($_SESSION['pgvisit']>10)
	{
		session_destroy();
	}
	else
	{
		echo"<h3>You have visited<i>".$_SESSION['pgvisit']."<i>time</h3>";
	}
	}
	else
	{
		$_SESSION['pgvisit']=1;
		echo"<h3>You have visited first time </h3>";
	}
?>

