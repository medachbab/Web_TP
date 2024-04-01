<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RetrouverNombre</title>
</head>
<body>
    <h2>exercice3</h2>
    <?php
    $nb = rand(100,999) ;
    $i = 1;
    while(true){
        $nb2 = rand(100,999);
       if ($nb2 === $nb){
            echo "Nombre d'essais réalisés (avec while) :".$i."<br>";
            break;
        }
        else {
            $i++;
        }
    }
    //r
    $i=0;
    for ($nbgnr = null; $nbgnr !== $nb; $i++) {
    $nbgnr = rand(100, 999);
    // Affichage du nombre d'essais réalisés
    }
    echo "Nombre d'essais réalisés (avec for) :".$i;
    ?>
</body>
</html>
