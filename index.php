<?php
function getMessage()
{
    $message = "Visiteur";
    $messageVisiteur = null;

    if(isset($_GET['name']) && !empty($_GET['name'])){
        $messageVisiteur = htmlspecialchars($_GET['name']);
    }

    if($messageVisiteur){
        $message = $messageVisiteur;
    }
    return $message;
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application PHP</title>
</head>
<body>
<h1>Bienvenue sur mon projet PHP</h1>
<p>Rentrez votre prenom pour le voir sur la page</p>
<h4>Bonjour <?= getMessage() ?></h4>

<form action="index.php" method="get">
    <input type="text" name="name" id="" placeholder="Votre prénom">
    <button type="submit">Valider</button>
</form>

</body>
</html>