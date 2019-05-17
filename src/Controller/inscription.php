<!-- L'en-tête -->
<?php include("../Includes/header.php"); ?>


    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
          <form class="">
            <div class="form-group"> <label></label>
              <input type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group"> <label></label>
              <input type="text" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group"> <label></label>
              <input type="text" class="form-control" placeholder="Métier">
            </div>
            <div class="form-group"> <label></label>
              <input type="email" class="form-control" placeholder="Adresse Email">
            </div>
            <div class="form-group"> <label></label>
              <input type="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="form-group"> <label></label>
              <input type="password" class="form-control" placeholder="Confirmation du mot de passe">
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
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
        if(isset($_GET["erreur"])){
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