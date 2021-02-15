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
    <form action="hw2-3cal.php" method="get">
     โปรแกรมตรวจเลขท้าย 2 ตัว<br><br>
     รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ X 60 เท่า)<br><br>
     เช่น ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท<br><br>
     เลขเสี่ยงโชค [0 - 99] <input type="number" min="0" name="num1" max="99"><br><br>
     * ซื้อได้ ตั้งแต่ 10 - 500 บาทเท่านั้น<br><br>
     จำนวนเงินที่คุณต้องการซื้อ [10 - 500 บาท] <input type="number" min="10" name="num2" max="500"><br>
     <input type="submit" value=" ตรวจรางวัล "/>
    </center> 
    </form>
</body>
</html>