<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres d'Armstrong</title>
</head>
<body>
    <h1>Nombres d'Armstrong inférieurs à 1000</h1>
    
        <?php
        for ($i = 0; $i < 1000; $i++) {
            $iString = (string)$i; 
            $l = strlen($iString);
            $somme = 0;

            for ($j = 0; $j < $l; $j++) {
                $chifr = (int)$iString[$j]; 
                $somme += pow($chifr, 3);
            }

            if ($somme === $i) {
                echo "<li class='armstrong'>$i </li>";
            }
        }
        ?>
    
</body>
</html>
