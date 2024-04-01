<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Résolution d'équations du second degré</title>
</head>
<body>
    <h1>Résolution d'équations du second degré</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="a">Coefficient a :</label>
        <input type="number" id="a" name="a" required >
        <br>
        <label for="b">Coefficient b :</label>
        <input type="number" id="b" name="b" required>
        <br>
        <label for="c">Coefficient c :</label>
        <input type="number" id="c" name="c" required>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    function solutionEquation($a, $b, $c) {
        // Calculer delta
        $delta = ($b * $b) - (4 * $a * $c);
        
        // Si delta est positif
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $x1 = number_format($x1, 2, ',', ' ');
            $x2 = number_format($x2, 2, ',', ' ');
            echo "Les solutions sont : x1 = $x1 et x2 = $x2";
        } elseif ($delta == 0) { 
            // Si le delta est nul
            $x = -$b / (2 * $a);
            echo "La solution est réelle et unique : x = $x";
        } else { // Si le delta est négatif
            $R = -$b / (2 * $a);
            $Im = sqrt(-$delta) / (2 * $a);
            $x1 = $R + $Im;
            $x2 = $R - $Im;
            //forater le resultat:
            $x1 = number_format($x1, 2, ',', ' ');
            $x2 = number_format($x2, 2, ',', ' ');
            echo "Les solutions sont complexes : x1 = $R + $Im * i et x2 = $R - $Im * i";

        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        solutionEquation($a, $b, $c);
    }
    ?>
</body>
</html>
