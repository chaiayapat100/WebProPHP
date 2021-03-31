<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-6 </title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("bomb.jpg", "rb");
    if ($fp) {
        $fpnew = @fopen("new_bomb.jpg", "wb");
        while ($ln = @fread($fp, 1024)) {
            fwrite($fpnew, $ln);
        }
        @fclose($fp);
        @fclose($fpnew);
        copy("bomb.jpg", "bomb_copy.jpg");
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_bomb.jpg' width='320' height='240'>";
    } else {
        die("ไม่สามารถเปิดไฟล์ bomb.jpg ได้ !");
    }
    ?>
</body>

</html>