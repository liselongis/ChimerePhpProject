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


            <div class="form-group"> <label>Date</label>
                <input type="text" class="form-control" placeholder="">
            </div>

            <div class="form-group"> <label>Nom</label>
                <input type="text" class="form-control" placeholder="">
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
                        <label class="form-check-label" for="inlineCheckbox1">Réparation</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Création</label>
                    </div>
            </div>

            <div class="form-group"> <label>Prix</label>
                <input type="text" class="form-control" placeholder="">
            </div>

              <br>

              <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
          </form>
        </div>
      </div>
    </div>







    
<!-- Le pied de page -->
<?php include("../Includes/footer.php"); ?>