<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,
        tr {
            border: 3px solid black;
        }

        table {
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <?php
            $cust = $_POST["cust"];
            $price = $_POST["price"];
            $count = $_POST["count"];
            $total = $price * $count;
            ?>
            <tr>
                <td> ชื่อลูกค้า : </td>
                <td><?php
                    echo $cust;
                    ?></td>
            </tr>
            <tr>
                <td> ผ่อนงวดละ : </td>
                <td><?php
                    echo $price;
                    ?></td>
            </tr>
            <tr>
                <td> จำนวนงวด : </td>
                <td><?php
                    echo $count;
                    ?></td>
            </tr>
            <tr>
                <td> ยอดรวมเงิน : </td>
                <td><?php
                    echo $total;
                    ?></td>
            </tr>

            <?php
            carcheck($total);
            function carcheck($total)
            {
                if ($total < 749000) {
                    echo "<tr>";
                    echo "<td colspan='2'>";
                    echo " ยอดรวมเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนต์ได้";
                    echo "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<td colspan='2'>";
                    echo "รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้  ";
                    echo "</td>";
                    echo "</tr>";
                    if ($total >= 749000) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<img src='img/City.png' alt=''>";
                        echo "<img src='img/logo-city.png' alt=''>";
                        echo "</td>";
                        echo "<td>";
                        echo " ราคา 749,000 บาท";
                        echo "</td>";
                        echo "</tr>";
                    }
                    if ($total >= 849000) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<img src='img/Jazz.png' alt=''>";
                        echo "<img src='img/logo-jazz.png' alt=''>";
                        echo "</td>";
                        echo "<td>";
                        echo " ราคา 849,000 บาท";
                        echo "</td>";
                        echo "</tr>";
                    }
                    if ($total >= 1149000) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<img src='img/Civic.png' alt=''>";
                        echo "<img src='img/logo-civic.png' alt=''>";
                        echo "</td>";
                        echo "<td>";
                        echo " ราคา 1,149,000 บาท";
                        echo "</td>";
                        echo "</tr>";
                    }
                    if ($total >= 1799000) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<img src='img/Accord.png' alt=''>";
                        echo "<img src='img/logo-accord.png' alt=''>";
                        echo "</td>";
                        echo "<td>";
                        echo " ราคา 1,799,000 บาท";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
            <tr>
                <td colspan="2" align="center">
                    <a href="carpay.php"> <button>Back to Home</button></a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>