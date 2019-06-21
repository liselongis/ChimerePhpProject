<?php
include_once "config.php";

$identifiant=filter_input(INPUT_POST, "identifiant");
$mdp=filter_input(INPUT_POST, "mdp");

//Je crée une connexion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT
, Config::USER, Config::MDP);

//je prépare une requete
$r=$db->prepare("select * from UTILISATEUR where login=:identifiant and mdp=:mdp");
$r->bindParam(":identifiant", $identifiant);
$hash=md5($mdp);
$r->bindParam(":mdp", $hash);

//je lance la requete
$r->execute();

$lignes=$r->fetchAll();


if (count($lignes) > 0){
        $employe=$lignes[0];


    //je stocke en session que c'est bon
    session_start();
    $_SESSION["logged"]="oui";
    $_SESSION["employe"]=$employe;

    include_once "RedirectInit.php";

}
header("Location: login.php?erreur=1");

?>
