<?php

include_once "../config.php";

$nom=filter_input(INPUT_POST, "nom");

//$nom=$_POST["nom"];

//Je crée une connextion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT, Config::USER, Config::MDP);

//Je prépare une requete
$r=$db->prepare("insert into categories(nom) values(:nom)");
$r->bindParam(":nom", $nom);

//Je lance la requete
$r->execute();

//Je retourne à l'index
header("location: ../View/Index.php");


