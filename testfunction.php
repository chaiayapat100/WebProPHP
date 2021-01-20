<?php
$x = 100 ;
$y = 10 ;
$operator = "+";
function plus($x, $y)
{
    $z =$x + $y;
    echo "x + y = ",$z."<br>";
}
function sub($x, $y)
{
    $z = $x - $y;
    echo "x - y = ",$z."<br>" ;
}
function mul($x, $y)
{
    $z = $x * $y;
    echo "x * y = ",$z."<br>" ;
}
function div($x, $y)
{
    $z = $x / $y;
    echo "x / y = ",$z."<br>" ;
}
/*
if($operator == "+"){
    plus($x,$y);
}
else if($operator == "-"){
    minus($x,$y);
}
else if($operator == "*"){
    mul($x,$y);
}
else if($operator == "/"){
    div($x,$y);
}
*/
switch ($operator){
    case("+"):
        plus($x,$y);
        break;
    case("-"):
        sub($x,$y);
        break;
    case("*"):
        mul($x,$y);
        break;
    case("/"):
        div($x,$y);
        break;
    default:
}
?>

