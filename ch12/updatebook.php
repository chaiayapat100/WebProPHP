<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Book</title>
</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "392543";
    $dbname = "bookit";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");

    $id = $_GET['id'];
    $sql = "SELECT * FROM book WHERE BookID = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    ?>

    <form enctype="multipart/form-data" name="save" method="POST" action="savebookupdate.php">
        <?php
        echo "<table border=1 align=center bgcolor=#FFCCCC>";
        echo "<tr><td align=center colspan=2 bgcolor=FF99CC><B> แก้ไข รายละเอียดหนังสือ 
    </B></td></tr>";

        echo "<tr><td> รหัสหนังสือ :</td><td><input type=\"text\" name=\"BookID\" value=\""
            . $data["BookID"] . "\"></td></tr>";
        echo "<tr><td> ชื่อหนังสือ :</td><td><input type=\"text\" name=\"BookName\" value=\""
            . $data["BookName"] . "\"></td></tr>";
        echo "<tr><td> สำนักพิมพ์ :</td><td><input type=\"text\" name=\"Publish\" value=\""
            . $data["Publish"] . "\"></td></tr>";
        echo "<tr><td> ราคาซื้อ :</td><td><input type=\"text\" name=\"UnitPrice\" value=\""
            . $data["Publish"] . "\"></td></tr>";
        echo "<tr><td> ราคาเช่า :</td><td><input type=\"text\" name=\"UnitRent\" value=\""
            . $data["UnitRent"] . "\"></td></tr>";

        echo "</table>";
        ?>

        <BR>
        <div align="center">
            <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
            <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
        </div>
    </form>
    <div align="center"><A href="listofbook2.php"> กลับหน้าหลัก </A></div></BR>
</body>

</html>