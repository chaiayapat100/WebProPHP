<?php
$x = 100 ;
$y = 10 ;

function plus($x, $y)
{
    $z = $x + $y;
    echo "x + y = ",$z;
}
function sub($x, $y)
{
    $z = $x - $y;
    echo "x - y = ",$z ;
}
function mul($x, $y)
{
    $z = $x * $y;
    echo "x * y = ",$z ;
}
function div($x, $y)
{
    $z = $x / $y;
    echo "x / y = ",$z ;
}
plus($x, $y);
sub($x, $y);
mul($x, $y);
div($x, $y);
