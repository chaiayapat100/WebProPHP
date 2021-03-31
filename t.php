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
        $arr = array("Earth", "Gus", "Pooh", "Ter", "Web");
    ?>
    <center>
        <table border="1" width="50%">
        <caption>Table</caption>
            <tr align="center">
                <td>No.</td><td>Name</td>
            </tr>

            <?php for($i = 0 ; $i < 5 ; $i++){ ?>
                <tr align="center">
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $arr[$i]; ?></td>
                </tr>
            <?php } ?>
            
            <tr align="center">
                <td colspan="2">By Earth</td>
            </tr>
        </table>
    </center>
</body>
</html>