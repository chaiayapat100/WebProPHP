<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        width: 280px;
    }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <Center>
            <h2>HW2-1 : Find Character</h2><br>
            <label>Your Text : </label>
            <input name="text" type="text" style="width: 250px;" required><br><br>
            <input name="submit" type="submit" value="Submit">
            <button type="reset">clear</button><br>
            <h3>Count Char in Sentence</h3>
        </Center>
    </form>
    <?php
    echo '<center><div>';
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        foreach (count_chars($text,1) as $i => $val){
            if(chr($i) == ' '){
                echo "Space = ".$val." , ";
            }
            else{
                echo chr($i)." = ".$val." , ";
            }
        }
    }
    echo '</center></div>';
    ?>
</body>

</html>