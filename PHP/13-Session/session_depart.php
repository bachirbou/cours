<!-- une session sert a conserver des info temporairement. on pt open une session pour l'user qui a mis un produit ds son panier ms qui n'envoie pas ctte info en bdd, cr elle n'est pas definitive. -->

<?php

/* pour qu'une session puisse être debutéé et que l ont puissse recup ds info
il ft decla en ht du fils av tt chse un "session_start"*/

session_start();

$_SESSION['prenom'] = "Hanma";
$_SESSION['statut'] = "roi des combattants";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="session_arrivee.php">Aller ver le profil</a></button>
</body>
</html>
