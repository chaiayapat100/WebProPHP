<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 100;
    if($score >= 0 && $score < 50)
        $grade = "F";
    if($score >= 50 && $score < 60)
        $grade = "D";
    if($score >= 60 && $score < 70)
        $grade = "C";
    if($score >= 70 && $score < 80)
        $grade = "B";
    if($score >= 80 && $score <= 100)
        $grade = "A";
    
        ?>
    <label> Score got : <?php echo $score;?> </label><br>
    <label> Grade got : <?php echo $grade;?> </label>
    
</body>
</html>