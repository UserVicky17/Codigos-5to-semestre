<html>

<head>
    <title> FUNCIONES</title>
</head>

<body>
    <h1 align="center"> FUNCIONES</h1>
    <hr>
    <?php
    function iExponentePorValor($inumero)
    {
        echo "Duplicando el valor del argumento<br> ";
        echo "Resultado = " . $inumero * $inumero . "<br> ";
        return $inumero *= $inumero;
    }
    function iExponentePorReferencia(&$inumero2)
    {
        echo "Duplicando la referencia pasada como argumento<br> ";
        echo "Resultado = " . $inumero2 * $inumero2 . "<br> ";
        return $inumero2 *= $inumero2;
    }
    function iExponentePorDefecto($inumero, $iExponente = 2)
    {
        $resultado = 1;
        for ($i = 1; $i <= abs($iExponente); $i++)
            $resultado *= $inumero;
        if ($iExponente < 0)
            $resultado = 1 / $resultado;
        return $resultado;
    }
    $ioperador1 = 2;
    $iresultado = iExponentePorValor($ioperador1);
    echo "Valor de \ $iresultado = $iresultado<br> ";
    echo "Valor de \ $ioperador1 = $ioperador1<br> ";
    $iresultado2 = iExponentePorReferencia($ioperador1);
    echo "Valor de \ $iresultado2 = $iresultado2<br> ";
    echo "Valor de \ $ioperador1 = $ioperador1<br> ";
    echo "Sin pasarle ningún valor al argumento:";
    $iresultado3 = iExponentePorDefecto($ioperador1);
    echo "Valor de \ $iresultado3 = $iresultado3<br> ";
    echo "Pasandole un valor al argumento: ";
    $iresultado3 = iExponentePorDefecto($ioperador1, 3);
    echo "Valor de \ $iresultado3 = $iresultado3<br> ";
    ?>
</body>
</html>