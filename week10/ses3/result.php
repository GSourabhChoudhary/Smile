<?php
//session_start();
$con=mysqli_connect("localhost","root","ROOT","votedb");
if($con==false) echo"connection error".mysqli_connect_error($con);
$ert=select * from candidate where cid='$session["user"]'";
if($res=mysqli_query($con,$ert));
if(mysqli_num_rows($res)>0){
echo"<table>";
echo"<tr>";
echo "<th> CID </th>";
echo"<th> CNAME <th>";
echo "<th>Vote_count</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['cid']"</td>";
echo "<td>".$row['cname']"</td>";
echo "<td>".$row['vcount']"</td>";
echo "</tr>";
}
echo"</table>";
