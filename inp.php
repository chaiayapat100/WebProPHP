<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table>
            <form action="in.php" method="post">
                <tr>
                    <td> ค่าเริ่มต้น : </td>
                    <td><input type="number" name="str" size="15"> </td><br>
                </tr>
                <tr>
                    <td> ค่าสุดท้าย : </td>
                    <td><input type="number" name="end" size="15"> </td><br>
                </tr>
                <tr>
                    <td> ค่าตัวเลขที่นำไปหาร : </td>
                    <td><input type="number" name="div" size="15"> </td><br>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="Check Num " />
                    </td>
                    <?php
                    @$str = $_POST["str"];
                    @$end = $_POST["end"];
                    @$div = $_POST["div"];
                    if (isset($_POST['sub'])) {
                        echo '<tr>';
                        echo '<td>';
                        echo checknum($str, $end, $div);
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>';
                        echo countnum($str, $end, $div);
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>';
                        echo sumnum($str, $end, $div);
                        echo '</td>';
                        echo '</tr>';
                    }
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
            </form>
            </tr>
            </form>
        </table>
    </center>
</body>
</html>

