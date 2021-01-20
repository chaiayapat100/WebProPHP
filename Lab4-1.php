<html>

<head>
   <title>การกำหนดค่าตัวแปร</title>
</head>

<body>
   <?php
   $x = 100;
   $y = "200";
   $z = '300';
   $add = $x + $y;
   $sub = $z - $x;
   $muti = $y * $z;
   $divi = $muti / $z;
   $message = "ผลบวก $x + $y = $add";
   $message1 = "ผลลบ $z - $x = $sub";
   $message2 = "ผลคูณ $y x $z = $muti";
   $message3 = "ผลหาร $muti / $z = $divi";
   echo $message;
   echo "<br />";
   echo $message1;
   echo "<br />";
   echo $message2;
   echo "<br />";
   echo $message3;
   echo "<br />";
   ?>
</body>

</html>