<?php
$con=mysqli_connect("localhost","root","ROOT","votedb");
$query="select * from candidate";
$result=mysqli_query($con,$query) or die("Error Querying the database");
echo"Fetching Success";
echo'<from id="myform" action="update_vote.php" method="POST">';
while($row=mysqli_fetch_array($result))
{
echo'<input type="radio" id="name1" name="candidate" value"'.$row['cid'].'">'.$row['cname'].'</input><br />';
}
echo'<input type="submit" value="vote">';
echo'</form>';
?>

