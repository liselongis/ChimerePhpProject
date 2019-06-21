<!-- L'en-tête -->
<?php include("../Includes/header.php");
session_start();
?>



<center>
    <h1>Inscription</h1>
</center>
<br>


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
          <label for="metier_actuel"></label>
            <select class="form-control" id="metier_actuel" name="metier">
                  <?php foreach($lignes as $metier) { ?>
                      <option value="<?php echo $metier['id_metier'] ?>"><?php echo $metier['libelle_metier'] ?></option>
                  <?php } ?>
            </select>
        </div>

        <div class="form-group"> <label></label>
          <input type="phone" name="num_tel" class="form-control" placeholder="Téléphone">
        </div>

        <div class="form-group"> <label></label>
          <input type="email" name="adresse_email" class="form-control" placeholder="Adresse email">
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


<!-- pied de page -->
<?php include("../Includes/footer.php"); ?>