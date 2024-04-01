<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Suite de nombres aléatoires 2 pairs et le troisieme impair</title>
    
</head>
<body>
    <h3>Suite de nombres aléatoires 2 pairs et le troisieme impair</h1>
    <?php
    while (true) {
        $n1 = rand(1, 100);
        $n2 = rand(1, 100);
        $n3 = rand(1, 100);
        if ($n1 % 2 == 0 && $n2 % 2 == 0 && $n3 % 2 != 0) {
            echo "la suite: (" . $n1 . ":" . $n2 . ":" . $n3 . ")";
            break;
        }
    }

    ?>
</body>
</html>
