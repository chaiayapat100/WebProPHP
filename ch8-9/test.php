<?php
$row = $_GET["row"];
$col = $_GET["col"];
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$ran = rand($num1, $num2);
// declare function page_header with argument and defualt value
function page_header($title, $bgcolor = "ffffff")
{
    echo '<html lang="en"><head><meta charset="UTF-8">';
    echo '<title>' . $title . '</title></head>';
    echo '<body bgcolor="#' . $bgcolor . '">';
}
// declare function page_footer
function page_footer($message = "ขอบคุณ")
{
    echo '<hr>' . $message;
    echo '</body></html>';
}
// declare function checker
function show_checker($maxRow, $maxCol, $bgcolor1, $bgcolor2, $start, $end)
{
    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    echo '<table align="center" border="1">';
    $total = 0;
    for ($r = 1; $r <= $maxRow; $r++) {
        echo '<tr >';
        for ($c = 1; $c <= $maxCol; $c++) {
            if ($r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor1 : $bgcolor2) . '">';
            } else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }
            $ran = rand($start, $end);
            if ($r == 1) {
                $min = $ran;
                $max = $ran;
            }
            $total += $ran;
            $min = minnum($min, $ran);
            $max = maxnum($max, $ran);
            echo  $ran . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $num = ($maxRow * $maxCol);
    $total = average($total, $maxRow * $maxCol);
    echo "Min:" . $min . '<br>';
    echo "Max:" . $max . '<br>';
    echo "Average:" . $total . '<br>';
    if ($maxRow == $maxCol) $message = "This is Square";
    else $message = "This is Rectangle";
    echo "<p align='center'> $message </p>";
}
function minnum($min, $ran)
{
    if ($min < $ran) {
        return $min;
    }
    return $ran;
}
function maxnum($max, $ran)
{
    if ($max > $ran) {
        return $max;
    }
    return $ran;
}
function average($total, $num)
{
    $total = $total / $num;
    return $total;
}
page_header("Random", "FFDDEE");
show_checker($row, $col, "33ff99", "ffff99", $num1, $num2);
page_footer("Thank You.");
?>
<a href="testin.php"><input type="button" value=" Back " /></a>