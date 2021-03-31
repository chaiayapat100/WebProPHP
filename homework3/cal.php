<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homework </title>
</head>

<body>
    <table align="center">
        <tr>
            <td>
                <?php
                session_start();
                if (isset($_GET["Enter"])) {
                    $_SESSION["XD"] = $_GET["car"];
                }
                $car = $_SESSION["XD"];
                if ($car == 'Accord') {
                    $baht = 1799000;
                    $per = 0.02;
                } else if ($car == 'Civic') {
                    $baht = 1145000;
                    $per = 0.02;
                } else if ($car == 'Jazz') {
                    $baht = 754000;
                    $per = 0.04;
                } else if ($car == 'City') {
                    $baht = 749000;
                    $per = 0.04;
                }
                echo "<img src='Pic/logo-" . strtolower($car) . ".png' alt=''><br>";
                echo "<img src='Pic/$car.png' alt=''>";
                ?>
            </td>
            <td>
                <form action="" method="post">
                    <fieldset style="text-align: center;">
                        <legend> เลือกเงินดาวน์ </legend>
                        เงินดาวน์ <input type="radio" name="mon" onclick="check()" required>
                        <select name="down" id="c1" disabled>
                            <option value="0.15">15%</option>
                            <option value="0.2">20%</option>
                            <option value="0.25">25%</option>
                            <option value="0.3">30%</option>
                        </select> หรือ
                        <input type="radio" name="mon" onclick="check1()">
                        <input type="number" name="mon3" id="c2" disabled>
                    </fieldset>
                    <fieldset style="text-align: center;">
                        <legend> เลือกระยะเวลาการผ่อนชำระ </legend>
                        ระยะเวลา <select name="time">
                            <option>36</option>
                            <option>48</option>
                            <option>60</option>
                            <option>72</option>
                        </select> งวด
                    </fieldset>
                    <center><input type="submit" value="Calculate" name="enter"></center>
                </form>
                <?php
                if (isset($_POST["enter"])) {
                    @$time = $_POST["time"];
                    @$down = $_POST["down"];
                    @$mon3 = $_POST["mon3"];
                    $downpay = 0;
                    $install = 0;
                    $interesty = 0;
                    $interestt = 0;
                    echo "<table border='5'>";
                    echo "
                    <tr>
                        <td colspan ='2'> รายงานการคำนวณสินเชื่อผ่อนชำระ </td>

                    </tr>
                    <tr>
                        <td> รุ่นรถยนต์ :</td>
                        <td>" . $car . "</td>
                    </tr>
                    <tr>
                        <td> ราคารถยนต์ :</td>
                        <td>" . number_format($baht) . " บาท </td>
                    </tr>
                    <tr>
                        <td>(1) เงินดาวน์ :</td>";
                    if (isset($down)) {
                        echo "<td>" . number_format(DownPayment($baht, $down, $downpay)) . " บาท ( " . $down * 100 . " % )</td>";
                    } else {
                        echo "<td>" . number_format($mon3) . " บาท ( " . ($mon3 / $baht) * 100 . " % )</td>";
                    }
                    echo "</tr>
                    <tr>
                        <td>(2) จำนวนเงินที่ขอสินเชื่อ :</td>
                        <td> " . number_format(installment($baht, $downpay, $install)) . " บาท </td>
                    </tr>
                    <tr>
                        <td>(3) ดอกเบี้ยต่อปี :</td>
                        <td>" . number_format(interestYear($install, $per, $interesty)) . " บาท ( " . $per * 100 . "% ต่อปี )</td>
                    </tr>
                    <tr>
                        <td>(4) ดอกเบี้ย ทั้งหมด " . $time / 12 . " ปี (" . $time . "งวด):</td>
                        <td>" . number_format(interestTotal($interesty, $time, $interestt)) . " บาท </td>
                    </tr>
                    <tr>
                        <td>(5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด :</td>
                        <td>".number_format(payMonth($install, $interestt, $time))." บาท </td>
                    </tr>
                    <tr>
                        <td colspan='2'><center>  <a href='index.php'><input type='button' value=' กลับไปหน้าแรก ' ></a></center></td>
                    </tr>";
                    echo "</table>";
                }
                ?>
            </td>
        </tr>
    </table>
    <script>
        function check() {
            document.getElementById("c1").disabled = false;
            document.getElementById("c2").disabled = true;
        }

        function check1() {
            document.getElementById("c2").disabled = false;
            document.getElementById("c1").disabled = true;
        }
    </script>
    <?php
    function DownPayment($baht, $down, &$downpay)
    {
        $downpay = $baht * $down;
        return $downpay;
    }
    function installment($baht, $downpay, &$install)
    {
        $install = $baht - $downpay;
        return $install;
    }
    function interestYear($install, $per, &$interesty)
    {
        $interesty = $install * $per;
        return $interesty;
    }
    function interestTotal($interesty, $time, &$interestt)
    {
        $interestt = $interesty * $time / 12;
        return $interestt;
    }
    function payMonth($install, $interestt, $time)
    {
        $pay = ($install + $interestt) / $time;
        return $pay;
    }

    ?>
</body>

</html>