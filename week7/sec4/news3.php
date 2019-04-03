<? php
4x=5;
$y=16;
function mytest((){
global $x,$y;
$y=$x+$y
}
mytest();
echo $y;
?>

