<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<p>&nbsp;</p>

<form name="form1" method="post" action="">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Division</option>
            <option>Multiplicacion</option>
        </select>
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
    </p>
    <p>
        <input type="submit" name="button" id="button" value="Calcular" onclick="prueba">
    </p>
</form>

<p>&nbsp;</p>



<?php

if (isset($_POST["button"])){

    $numero1= $_POST["num1"];
    $numero2= $_POST["num2"];
    $operacion=$_POST["operacion"];

    if (!strcmp("Suma",$operacion)){

        echo "El resultado es : " . ($numero1+$numero2);
    }

    if (!strcmp("Resta",$operacion)){

        echo "El resultado es : " . ($numero1-$numero2);
    }

    if (!strcmp("Division",$operacion)){

        echo "El resultado es : " . ($numero1/$numero2);
    }

    if (!strcmp("Multiplicacion",$operacion)){

        echo "El resultado es : " . ($numero1*$numero2);
    }

}

?>


</body>
</html>