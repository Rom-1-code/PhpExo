<?php session_start();

function tableau()
{
    echo "<table><tr><th>Bonjour</th></tr></table>";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style1.css">
    <title>Exercice1</title>
</head>

<body>
    <div class="haut">
        <?php tableau() ?>
    </div>

    <div class="bas">
        <?php tableau() ?>
    </div>




</body>

</html>