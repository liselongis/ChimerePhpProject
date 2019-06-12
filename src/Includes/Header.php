<?php include_once 'config.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

        <title>Bijouterie</title>
    </head>
 
    <body>


<header class="fixed-header" >



<!-- Le menu -->

      <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
          <a class="navbar-brand" href="../../">             
                <img
                src="../Pictures/Logo-Chimere.png" 
                alt="Logo-Chimere"
                height="51px" 
                width="40px" 
                />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="../../"> Accueil <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../View/Page_Fondeur_Mouleur.php"> Fondeur/Mouleur </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../View/Page_Polisseur.php"> Polisseur </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../View/Page_Tailleur.php"> Tailleur </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../View/Page_Sertisseur.php"> Sertisseur </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../View/Page_Chef_d_atelier.php"> Chef d'Atelier </a>
              </li>



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Métier
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../View/Page_Fondeur_Mouleur.php"> Fondeur/Mouleur </a>
                  <a class="dropdown-item" href="../View/Page_Polisseur.php"> Polisseur </a>
                  <a class="dropdown-item" href="../View/Page_Tailleur.php"> Tailleur </a>
                  <a class="dropdown-item" href="../View/Page_Sertisseur.php"> Sertisseur </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../View/Page_Chef_d_atelier.php"> Chef d'Atelier </a>
                </div>
              </li>



            </ul>
              <div class="navbar-text actions">
                  <a class="btn btn-secondary" role="button" href="../Controller/inscription.php">Inscription</a>
                  &nbsp;
                  <a class="btn btn-dark" role="button" href="../Controller/login.php">Connexion</a>
              </div>
          </div>
        </nav>


</header>

<div class="p-5 "></div>