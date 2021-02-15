<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $ran1 = rand(0,99);
    if($num1 == $ran1){
        echo"ยินดีด้วยคุณถูกรางวัล<br>";
        echo("คุณได้เงินรางวัล ".($num2 * 60)."บาท<br>");
        
    }
    else{
        echo"เสียใจด้วยคุณไม่ถูกรางวัล<br>";
    }
    
    ?>
    <a href="hw2-3.php"><input type="button" value=" Back "/></a><br>
    รางวัล เลขที่ออก <?php 
    echo $ran1;
    ?>
</body>
</html>