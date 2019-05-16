<!-- L'en-tête -->
<?php include("header.php"); ?>


    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
          <form method="POST" action="actions/verifierLogin.php">
            <div class="form-group"> <label>Adresse Email</label>
            <input type="email" name="email_utilisateur" class="form-control" placeholder="Adresse Email">
            </div>
            <div class="form-group"> <label>Mot de passe</label>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
          </form>
          

          <br>
          <br>
          <p>
          Adresse Email : chimere@gmail.com
          <br>
          <br>
          Mot de passe : chimere
          <br>
          <br>
          Mot de passe MD5 : 
          (<?php echo md5("chimere") ?>)
          </p>


        </div>
      </div>
    </div>


<!-- pied de page -->
<?php include("footer.php"); ?>