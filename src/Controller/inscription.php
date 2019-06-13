<!-- L'en-tête -->
<?php include("../Includes/header.php");
session_start();
include_once "RedirectInit.php";
?>


<?php
//Je crée une connexion à la BDD
$db = new PDO(
  "mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE . ";port=" . Config::PORT,
  Config::USER,
  Config::MDP
);
//je prépare une requete
$r = $db->prepare("select * from METIER");

//je lance la requete
$r->execute();

//je récupère le résultat (un tableau de lignes)
$lignes = $r->fetchAll();
?>


<div class="container-fluid">
  <div class="row" style="">
    <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
      <form class="inscription" method="POST" action="../Controller/Inscrire.php">

        <div class="form-group"> <label></label>
          <input type="text" name="prenom" class="form-control" placeholder="Prénom">
        </div>
        <div class="form-group"> <label></label>
          <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>


        <div class="form-group">
          <label for="metier_actuel">Métier actuel</label>
          <select class="form-control" id="metier_actuel" name="metier">
            <?php foreach($lignes as $metier) { ?>
          <option value="<?php echo $metier['id_metier'] ?>"><?php echo $metier['libelle_metier'] ?></option>
            <?php } ?>
        </select>
        </div>
        <div class="form-group"> <label></label>
          <input type="phone" name="num_tel" class="form-control" placeholder="téléphone">
        </div>
        <div class="form-group"> <label></label>
          <input type="email" name="adresse_email" class="form-control" placeholder="Adresse Email">
        </div>
        <div class="form-group"> <label></label>
          <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
        </div>
        <br>
        <button type="submit" class="btn btn-block btn-dark btn-lg">OK</button>
      </form>
    </div>
  </div>
</div>



<!-- second login-->
<br>
<br>
<br>
<br>
<br>
<br>
<!-- second login-->



<div class="container">
  <div class="row">
    <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6">

      <h1>Identifiez-vous</h1>
      <form action="verifierLogin.php" method="POST">
        Email : <input type="email" name="email"><br>
        Mot de passe <input type="password" name="mdp"><br>
        <input type="submit" value="OK">
        <?php
        if (isset($_GET["erreur"])) {
          echo "L'identitifcation a échoué";
        }
        ?>
      </form>

      <p>alan@latetedanslatoile.fr / alan (<?php echo md5("alan") ?>)

    </div>
  </div>
</div>





<!-- pied de page -->
<?php include("../Includes/footer.php"); ?>