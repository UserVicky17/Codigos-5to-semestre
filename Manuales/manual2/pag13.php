<html>

<head>
    <title> FUNCIONES RECURSIVAS</title>
</head>

<body>
    <h1 align="center"> FUNCIONES RECURSIVAS</h1>
    <hr>
    <?
    function iFactorial($inumero)
    {
        if ($inumero == 0)
            return 1;
        return $inumero * iFactorial($inumero - 1);
    }
    echo iFactorial(5);
    ?>
</body>

</html>