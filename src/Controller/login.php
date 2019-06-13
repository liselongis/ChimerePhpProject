<!-- L'en-tête -->
<?php include("../Includes/header.php");
session_start();
include_once "RedirectInit.php";
?>

<div class="p-5 "></div>
<center>
<h1>Connexion</h1>
</center>
<br>
<div class="container">
  <div class="row" style="">
    <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
      <form method="POST" action="../Controller/verifierLogin.php">
        <div class="form-group"> <label></label>
          <input type="email" name="email_utilisateur" class="form-control" placeholder="Adresse Email">
        </div>
        <div class="form-group"> <label></label>
          <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
        </div>
        <br>
        <button type="submit" class="btn btn-block btn-dark btn-lg">OK</button>
        <br>
        <center>
        <?php
        if (isset($_GET["erreur"])) {
          echo "L'identitifcation a échoué";
        }
        ?>
        </center>
      </form>
    </div>
  </div>
</div>


<!-- pied de page -->
<?php include("../Includes/footer.php"); ?>