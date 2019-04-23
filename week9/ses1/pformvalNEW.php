<html>
<head>
<style>
.error{color:#FF0000}
</style>
</head>
<body>
<?php
$nameErr=$emailErr=$genderErr=$websiteErr="";
$name=$email=$comment=$website=$gender="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["name"])){
$nameErr="name is required";
}else{
$name=test_input($_POST["name"]);}
if(empty($_POST["email"])){
$emailErr="email is required";
}else{
$email=test_input($_POST["email"]);}
if(empty($_POST["website"])){
$websiteErr="website is required";
}else{
$website=test_input($_POST["website"]);}

$comment=test_input($_POST["comment"]);

$gender=test_input($_POST["gender"]);
}
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">*required field</span></p>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>

E-mail: <input type="text" name="email">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>

Website: <input type="text" name="website">
<span class="error">*<?php echo $websiteErr;?></span>
<br><br>

Comment: <textarea name="comment" row="5" cols="40"></textarea>
<br><br>

Gender:
<input type="radio" name="gender" value="female" checked>Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<br><br>

<input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br/>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>
</body>
</html>
