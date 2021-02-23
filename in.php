<?php
@$str = $_POST["str"];
@$end = $_POST["end"];
@$div = $_POST["div"];
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Document</title>';
echo '</head>';
echo '<body>';
echo '<center>';
echo '<table>';
echo '<form action="in.php" method="post">';
echo '<tr>';
echo '<td> ค่าเริ่มต้น :          </td>';
echo '<td><input type="number" name="str" size="15"> </td><br>';
echo '</tr>';
echo '<tr>';
echo '<td> ค่าสุดท้าย :         </td>';
echo '<td><input type="number" name="end" size="15"> </td><br>';
echo '</tr>';
echo '<tr>';
echo '<td> ค่าตัวเลขที่นำไปหาร : </td>';
echo '<td><input type="number" name="div" size="15"> </td><br>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<input type="submit" name="sub" value="Check Num " />';
echo '</td>';
echo '</form>';
echo '</tr>';
if(isset($_POST['sub'])){
echo '<tr>';
echo '<td>';
echo checknum($str,$end,$div);
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo countnum($str,$end,$div);
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo sumnum($str,$end,$div);
echo '</td>';
echo '</tr>';
}
echo '</table>';
echo '</center>';
echo '</>';
echo '</html>';

function checknum($str,$end,$sub){
    for($i = $str ;$i<=$end ;$i++){
        if($str % $sub == 0){
            echo $str,",";
        }
        $str++;
}
}

function countnum($str,$end,$sub){
    $count = 0 ;
    for($i = $str ;$i<=$end ;$i++){
        if($str % $sub == 0){
            $count++;
        }
        $str++;
}
 echo "จำนวนที่หารลงตัว = ". $count ." ตัว ";
}

function sumnum($str,$end,$sub){
    $sum = 0;
    for($i = $str ;$i<=$end ;$i++){
        if($str % $sub == 0){
            $sum += $str;
        }
        $str++;
}
 echo "ผลรวมของตัวเลขที่หารลงตัว = ".$sum;
}

?>