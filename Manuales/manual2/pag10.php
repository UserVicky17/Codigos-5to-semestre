<html>

<head>
    <title>
        FUNCION NÚMERO VARIABLE DE PARÁMETROS
    </title>
</head>

<body>
    <h1 align="center"> FUNCION NÚMERO VARIABLE DEPARÁMETROS</h1>
    <hr>
    <?
    function iElMayor()
    {
        $inumeroargumentos = func_num_args();
        $arrargumentos = func_get_args();
        $imayor = func_get_arg(0);
        for ($icontador = 1; $icontador < $inumeroargumentos; $icontador++) {
            if ($imayor < func_get_arg($icontador)){
                $imayor = func_get_arg($icontador);
            }
        }
        return $imayor;
    }
    echo iElMayor(4, 5, 6, 34, 56, 89, 765);
    echo "$imayor";
    ?>
</body>

</html>