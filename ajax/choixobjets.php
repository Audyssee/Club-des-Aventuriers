<?php
    header('Content-Type: text/xml');
    include_once("../connect.php");
    include("../classes/game.php");
 
    // Récupération des paramètres
    $obj1 = $_GET['obj1'];
    $obj2 = $_GET['obj2'];
    $obj3 = $_GET['obj3'];
    $obj4 = $_GET['obj4'];
    $obj5 = $_GET['obj5'];

    // Ajout des objets choisis dans la base de données
    $game = unserialize($_SESSION['game']);
    $code = $game->get_id();
    $_SESSION['game'] = serialize($game);

    $rq = "UPDATE Game SET obj1 = '".$obj1."', obj2 = '".$obj2."', obj3 = '".$obj3."', obj4 = '".$obj4."', obj5 = '".$obj5."' WHERE gameId = '".$code."'";
    $res = mysqli_query($db, $rq);
?>