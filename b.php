<html>
<head>
<title>Passing argument by Reference</title>
</head>
<body>
<?php
function addFive($num){
$num+=5;
}
function addsix($sum){
$num+=6;
}
$ori=10;
	addfive($ori);
	echo"ori val is $ori";
	addsix($ori);
	echo"ori val is $ori";
?>
</body>
</html>

