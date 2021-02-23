<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <style>
        td,
        tr {
            text-align: center;
            border: 3px solid black;
        }

        table {
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <table width="95%" align="center" border="1">
            <center>BINGO GAME</center><br>
            <?php
            $i = 0;
            $array = array();
            for ($row = 0; $row < 5; $row++) {
                echo '<tr height = "85px">';
                for ($col = 0; $col < 5; $col++) {
                    echo '<td>';
                    $array[$i] = rand(0, 99);
                    echo $array[$i];
                    $i++;
                }
                echo '</td>';
            }
            echo '</tr>';
            ?>
        </table>
        <br>
        <center>
            <input type="submit" name="sub" value=" START GAME ">
        </center>
        <?php
        if (isset($_POST["sub"])) {
            $cal = 1;
            $correct = 0;
            for (;;) {
                $i = 0;
                $rand = rand(0, 99);
                if (in_array($rand, $array)) {
                    echo "ครั้งที่" . $cal . " = " . $rand . " => <font color='#7FFF00'>ยินดีด้วย คุณมีเลขนี้</font><br>";
                    $correct++;
                } else {
                    echo "ครั้งที่" . $cal . " = " . $rand . " => <font color='red'>เสียใจด้วย คุณไม่มีเลขนี้</font><br>";
                }
                if ($correct == 5) {
                    echo "<center><font color='red'>คุณ จบ BINGO เกมนี้ ใน ครั้งที่ " . $cal . "</font></center>";
                    break;
                }
                $cal++;
            }
        }
        ?>
    </form>
</body>

</html>