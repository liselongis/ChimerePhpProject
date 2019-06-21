<?php include_once 'config.php';

// Connexion à la base de données CLIENT :

$prenom=filter_input(INPUT_POST, "prenom");
$nom=filter_input(INPUT_POST, "nom");


//Je crée une connexion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT
, Config::USER, Config::MDP);

//Je prépare une requete
$r=$db->prepare("insert into CLIENT(
        nom_client, 
        prenom_client) 
    values (
        :nom_client, 
        :prenom_client
    )");

$r->bindParam(":nom_client", $nom);
$r->bindParam(":prenom_client", $prenom);

//Je lance la requete
$r->execute();



// Connexion à la base de données COMMANDE :

$date_commande=filter_input(INPUT_POST, "date_commande");
$date_livraison=filter_input(INPUT_POST, "date_livraison");
$type_commande=filter_input(INPUT_POST, "type_commande");
$facture=filter_input(INPUT_POST, "facture");
$devis_accepter=filter_input(INPUT_POST, "devis_accepter");
$num_bijoux=filter_input(INPUT_POST, "num_bijoux");
$type_bijoux=filter_input(INPUT_POST, "type_bijoux");
$id_client=filter_input(INPUT_POST, "id_client");
$id_fiche_suivi=filter_input(INPUT_POST, "id_fiche_suivi");


//Je crée une connexion à la BDD
$db=new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE.";port=".Config::PORT
, Config::USER, Config::MDP);

//Je prépare une requete
$r=$db->prepare("insert into COMMANDE(
        date_commande,
        date_livraison,
        type_commande,
        facture,
        devis_accepter,
        num_bijoux,
        type_bijoux,
        id_client,
        id_fiche_suivi)
    values (
        :date_commande,
        :date_livraison,
        :type_commande,
        :facture,
        :devis_accepter,
        :num_bijoux,
        :type_bijoux,
        :id_client,
        :id_fiche_suivi
    )");

$r->bindParam(":date_commande", $date_commande);
$r->bindParam(":date_livraison", $date_livraison);
$r->bindParam(":type_commande", $type_commande);
$r->bindParam(":facture", $facture);
$r->bindParam(":devis_accepter", $devis_accepter);
$r->bindParam(":num_bijoux", $num_bijoux);
$r->bindParam(":type_bijoux", $type_bijoux);
$r->bindParam(":id_client", $id_client);
$r->bindParam(":id_fiche_suivi", $id_fiche_suivi);

//Je lance la requete
$r->execute();







$lignes=$r->fetchAll();

//Je retourne à l'adresse
header("location:../View/Home_Page.php");