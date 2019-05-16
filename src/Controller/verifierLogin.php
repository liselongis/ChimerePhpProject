<?php
include_once "../config.php";

$email_utilisateur=filter_input(INPUT_POST, "email_utilisateur");
$mdp=filter_input(INPUT_POST, "mdp");

//Je crée une connexion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT
, Config::USER, Config::MDP);
//je prépare une requete
$r=$db->prepare("select * from UTILISATEUR where email_utilisateur=:email_utilisateur and mdp=:mdp");
$r->bindParam(":email_utilisateur", $email_utilisateur);
$hash=md5($mdp);
$r->bindParam(":mdp", $hash);

//je lance la requete
$r->execute();

$lignes=$r->fetchAll();


//S'il n'y a pas de ligne : retour à l'index
if (count($lignes)==0){
    header("Location: ../login.php?erreur=1");
}

//Sinon, c'est que j'ai trouvé l'utilisateur

else{
    $employe=$lignes[0];


    //je stocke en session que c'est bon
    session_start();
    $_SESSION["logged"]="oui";
    

//Si l'id_metier est égale à XXX alors appeler une page de l'id_metier

    if($employe["id_metier"]==1){
        header("Location: ../page1.php");
    }

    elseif($employe["id_metier"]==2){
        header("Location: ../page2.php");
    }

    elseif($employe["id_metier"]==3){
        header("Location: ../page3.php");
    }

    elseif($employe["id_metier"]==4){
        header("Location: ../page4.php");
    }

    elseif($employe["id_metier"]==5){
        header("Location: ../page5.php");
    }

    else
    {
        header("Location: ../pageEmploye.php");
    }

    //Je retourne à l'index
    
}

