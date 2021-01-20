<html>

<body>
    <?php
    $x = $_GET["numx"];
    $y = $_GET["numy"];
    $oper = $_GET["operator"];
    $z = 0;

    function plus($x, $y)
    {
        global $z;
        $z = $x + $y;
        echo "x + y = ", $z . "<br>";
    }
    function sub($x, $y)
    {
        global $z;
        $z = $x - $y;
        echo "x - y = ", $z . "<br>";
    }
    function mul($x, $y)
    {
        global $z;
        $z = $x * $y;
        echo "x * y = ", $z . "<br>";
    }
    function div($x, $y)
    {
        global $z;
        $z = $x / $y;
        echo "x / y = ", $z . "<br>";
    }
    switch ($oper) {
        case ("+"):
            plus($x, $y);
            break;
        case ("-"):
            sub($x, $y);
            break;
        case ("*"):
            mul($x, $y);
            break;
        case ("/"):
            div($x, $y);
            break;
        default:
    }

    $message = "Show Result";
    $message1 = "X = $x";
    $message2 = "Y = $y";
    $message3 = "Operator = $oper";
    echo $message;
    echo "<br />";
    echo $message1;
    echo "<br />";
    echo $message2;
    echo "<br />";
    echo $message3;
    echo "<br />";
    echo "result = $z";
    ?>
</body>

</html>