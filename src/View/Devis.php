<?php include("../Includes/header.php"); ?>



<!-- Le corps -->
 
<div id="corps">
            <div class="container-fluid">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>Devis</h1>
                    </div>
                </div> 
            </div> 
    </div> 









    <div class="container-fluid">
      <div class="row" style="">
        <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
          <form class="inscription" method="POST" action="../Controller/inscrire.php">


            <div class="form-group"> <label></label>
                <input type="Date" class="form-control" placeholder="Date (jj/mm/aaaa)">
            </div>

            <div class="form-group"> <label></label>
                <input type="Prénom" class="form-control" placeholder="Prénom">
            </div>

            <div class="form-group"> <label></label>
                <input type="Nom" class="form-control" placeholder="Nom">
            </div>

            <div class="form-group"> <label></label>
                <input type="phone" class="form-control" placeholder="Numéro de téléphone">
            </div>

            <div class="form-group"> <label></label>
                <input type="email" class="form-control" placeholder="Adresse email">
            </div>

            <div class="form-group"> <label></label>
                <input type="Adresse postale" class="form-control" placeholder="Adresse postale">
            </div>

            <div class="form-group"> <label></label>
                <input type="Ville" class="form-control" placeholder="Ville">
            </div>

            <div class="form-group"> <label></label>
                <input type="CP" class="form-control" placeholder="Code postale">
            </div>


            <div class="form-group"> <label>Type</label>
            <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Réparation</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Création</label>
                    </div>
            </div>

            <div class="form-group"> <label>Type de bijoux</label>
            <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Boucles</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Bracelet</label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Collier</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Bague</label>
                    </div>
            </div>

            <div class="form-group"> <label></label>
                <input type="Prix" class="form-control" placeholder="Prix (€)">
            </div>

              <br>

              <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
          </form>
        </div>
      </div>
    </div>







    
<!-- Le pied de page -->
<?php include("../Includes/footer.php"); ?>