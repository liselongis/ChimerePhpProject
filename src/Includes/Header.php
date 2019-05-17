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


    <header>


<!-- Le menu -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bijouterie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php"> Accueil <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../View/page1.php"> Page 1</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../View/page2.php"> Page 2</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../View/page3.php"> Page 3</a>
      </li>

    </ul>

      <span class="navbar-text actions">
          <a class="btn btn-secondary" role="button" href="../Controller/inscription.php">Inscription</a>
          &nbsp;
          <a class="btn btn-dark" role="button" href="../Controller/login.php">Connexion</a>
      </span>

  </div>
</nav>


<div class="mx-auto" style="width: 200px;">
</div>


    </header>