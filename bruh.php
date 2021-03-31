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
        <form action="" method="POST">
            Insert name : <input type="text" name="uname" required><br>
            Insert score : <input type="number" min="0" name="score" max="100"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
        @$uname = $_POST["uname"];
        @$score = $_POST["score"];
        if($score <= 100 && $score >= 80){
                $grade = "A";
        }
        if($score <= 79 && $score >= 75){
                $grade = "B+";
        }
        if($score <= 74 && $score >= 71){
                $grade = "B";
        }
        if($score <= 70 && $score >= 65){
                $grade = "C+";
        }
        if($score <= 64 && $score >= 61){
                $grade = "C";
        }
        if($score <= 60 && $score >= 55){
                $grade = "D+";
        }
        if($score <= 54 && $score >= 51){
                $grade = "D";
        }
        if($score <= 49 && $score >= 0){
                $grade = "F";
        }
        if (isset($_POST["submit"])){
        echo "Name : ".$uname."<br>";
        echo "Score : ".$score."<br>";
        echo "Grade : ".$grade."<br>";
        }
         ?>
    </center>
</body>

</html>