<!--
<html>
<body>
	<?php
	define("MINSIZE",50);
	echo MINSIZE;
	?>
<BR/>
<BR/>
<?php
	$array=array(1,2,3,4,5);
	foreach($array as $value){
	echo "value is $value <br/>";
}
?>
<BR/>
<BR/>
<?php
	$sal=array("j"=>100,"a"=>500,"q"=>400);
	echo "sal of j is".$sal['j'];
?>
<BR/>
<BR/>
<?php
	$string1="HelloWorld";
	$string2="1234";
	echo $string1 . " ".$string2;
?>
<br/>
<br/>

-->

<?php
if($_GET["name"]||$_GET["age"]){
echo "welcome" .$_GET['name']."<br/>";
echo "you are" .$_GET['age']."years old.";
exit ();
}
?>
<html>
<body>
	<form action="<?php $_PHP_SELF?>"method="GET">
	name:<input type="text" name="name"/>
	age:<input type="text" name="age"/>
	<input type="submit"/>
</form>
</body>
</html>


</body>
</html>

