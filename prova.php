<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = "Luigi";
        $y = 30;
        $frase = "<h3>Mi chiamo $x ed ho $y anni</h3>";
        
        echo "<h1>Mi chiamo " . $x . " ed ho " . $y . " anni</h1>";
        echo "<br>";
        echo "<h2>Mi chiamo $x ed ho $y anni</h2>";
        echo "<br>";
        echo $frase;
?>
    <p>Prova Paragrafo</p>

    <?php
        echo "<h1>Mi chiamo " . $x . " ed ho " . $y . " anni</h1>";
        echo "<br>";
        echo "<h2>Mi chiamo $x ed ho $y anni</h2>";
        echo "<br>";
        echo $frase;
    ?>

    <?php
        $z = 7;
        var_dump($z);

        echo "<br>";

        $z = "Ciao a Tutti!!!";
        var_dump($z);

        echo "<br>";

        $z = 7.5;
        var_dump($z);

        echo "<br>";

        $vero = true;
        $falso = false;
        var_dump($vero);

        echo "<br>";

        var_dump($falso);
    ?>


</body>
</html>