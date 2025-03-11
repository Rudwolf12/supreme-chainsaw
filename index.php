<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content='Rodolfo "Rudwolf"'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>Comparaciones</title>
</head>
<body>
<fieldset>
    <header>
        <h1>Evidencia de aprendizaje</h1>
    </header>
    <hr>
    <main>
    <h2>Operadores comparativos</h2>
    <p>En esta pagina web se usaron diferentes operadores comparativos para dos elementos input.</p>
    
        <form action="" method="post">
        <label for='num1'>Escribe un número:</label>
        <input type='number' name='num1' id='num1'>
        <label for='num2'>Ahora escribe otro número:</label>
        <input type='number' name='num2' id='num2'>
        <input type="submit" value="Enviar">
        </form>
    
    <?php
    if ($_POST != null) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 == $num2) {
            echo "<p>Ambos números son iguales</p>";
        } elseif ($num1 != $num2) {
            echo "<p>Los números son diferentes</p>";
        }
        if ($num1 < $num2) {
            echo "<p>El primer numero (", $num1,") es menor que el segundo (", $num2,")</p>";
        } elseif ($num1 > $num2) {
            echo "<p>El primer numero (", $num1,") es mayor que el segundo (", $num2,")</p>";
        }
        if ($num1 <= $num2) {
            echo "<p>El primer numero (", $num1,") es menor o igual que el segundo (", $num2,")</p>";
        } elseif ($num1 >= $num2) {
            echo "<p>El primer numero (", $num1,") es mayor o igual que el segundo (", $num2,")</p>";
        }

        if ($num1 == "") {
            echo "<p>1.4!!!!!!!!</p>";
        }
    }
    ?>
    </main>
    </fieldset>
</body>
</html>