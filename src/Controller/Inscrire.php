<?php include_once 'config.php';

$prenom=filter_input(INPUT_POST, "prenom");
$nom=filter_input(INPUT_POST, "nom");
$id_metier=filter_input(INPUT_POST, "metier");
$identifiant=filter_input(INPUT_POST, "identifiant");
$adresse_email=filter_input(INPUT_POST, "adresse_email");
$num=filter_input(INPUT_POST, "num_tel");
$mdp=filter_input(INPUT_POST, "mdp");

//Je crée une connexion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT
, Config::USER, Config::MDP);

//Je prépare une requete
$r=$db->prepare("insert into UTILISATEUR(
        nom_utilisateur, 
        prenom_utilisateur, 
        login, mdp, 
        email_utilisateur, 
        num_tel, 
        id_metier) 
    values (
        :nom_utilisateur, 
        :prenom_utilisateur, 
        :identifiant, 
        :mdp, 
        :email_utilisateur, 
        :num_tel, 
        :id_metier
    )");

$r->bindParam(":nom_utilisateur", $nom);
$r->bindParam(":prenom_utilisateur", $prenom);
$r->bindParam(":identifiant", $identifiant);
$r->bindParam(":mdp", md5($mdp));
$r->bindParam(":email_utilisateur", $adresse_email);
$r->bindParam(":num_tel", $num);
$r->bindParam(":id_metier", $id_metier);

//Je lance la requete
$r->execute();


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