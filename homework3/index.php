<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homework </title>
    <style>
        td {
            text-align: center;
        }

        table {
            text-align: center;
            width: 55%;
        }

        img {
            width: 45%;
        }
    </style>
</head>

<body>
    <center><img src="Pic/header.jpg" alt=""></center>
    <fieldset style="text-align: center;">
        <legend> Car Model </legend>
        เลือกรุ่นรถยนต์
        <form action="cal.php" method="get">
            <select name="car">
                <option>Accord</option>
                <option>Civic</option>
                <option>Jazz</option>
                <option>City</option>
            </select>
            <button type="submit" name="Enter"> Submit </button>
        </form>
        <center>
            <table border="1">
                <tr>
                    <td>ภาพรถยนต์</td>
                    <td>รุ่นรถยนต์</td>
                    <td>ราคารถยนต์(บาท)</td>
                    <td>อัตราดอกเบี้ย ต่อปี (ร้อยละ,%)</td>
                </tr>
                <tr>
                    <td><img src="Pic/Accord.png" alt=""></td>
                    <td>Accord</td>
                    <td>1,799,000</td>
                    <td>2.00</td>
                </tr>
                <tr>
                    <td><img src="Pic/Civic.png" alt=""></td>
                    <td>Civic</td>
                    <td>1,145,000</td>
                    <td>2.00</td>
                </tr>
                <tr>
                    <td><img src="Pic/Jazz.png" alt=""></td>
                    <td>Jazz</td>
                    <td>754,000</td>
                    <td>4.00</td>
                </tr>
                <tr>
                    <td><img src="Pic/City.png" alt=""></td>
                    <td>City</td>
                    <td>749,000</td>
                    <td>4.00</td>
                </tr>
            </table>
        </center>
    </fieldset>
</body>

</html>