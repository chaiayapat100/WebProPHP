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
    <center>
    <table>
        <form action="carsell.php" method="post">
            <tr>
                <td> ชื่อ นามสกุล ของลูกค้า : </td>
                <td><input type="text" name="cust" size="15" required> </td><br>
            </tr>
            <tr>
                <td> จำนวนเงินที่ต้องการผ่อนต่อ 1 งวด : </td>
                <td><input type="number" name="price" size="15" required> </td><br>
            </tr>
            <tr>
                <td> จำนวนงวดที่ต้องการ : </td>
                <td><select name="count">
                        <option value=""></option>
                        <option value="36"> 36 </option>
                        <option value="48"> 48 </option>
                        <option value="60"> 60 </option>
                        <option value="72"> 72 </option>
                    </select></td><br>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="sub" value=" ซื้อรถ " />
                </td>
    </table>
    </center>
</body>
</html>