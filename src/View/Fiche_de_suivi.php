<?php include("../Includes/header.php"); ?>


<!-- Le corps -->
 
<div id="corps">
            <div class="container-fluid">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>Fiche de suivi</h1>
                    </div>
                </div> 
            </div> 
    </div>






    <div class="container-fluid">
      <div class="row" style="">
        <div class="mx-auto col-xs-12 col-sm-12 col-md-9 col-lg-7 col-xl-6" style="">
          <form class="inscription" method="POST" action="../Controller/inscrire.php">


        <div class="form-group">
            <label for="etat">Etat</label>
                <select class="form-control" id="etat">
                <option>Comme neuf</option>
                <option>Très bon état</option>
                <option>Bon état</option>
                <option>État correct</option>
                </select>
        </div>


        <div class="form-group">
            <label for="metier_actuel">Métier actuel</label>
                <select class="form-control" id="metier_actuel">
                <option>Fondeur/Mouleur</option>
                <option>Polisseur</option>
                <option>Tailleur</option>
                <option>Sertisseur</option>
                <option>Chef d'Atelier</option>
                </select>
        </div>


            <div class="form-group"> <label>Nombre d'heure</label>
                <input type="text" class="form-control" placeholder="">
            </div>


            <div class="form-group">
                <label for="commentaire">Commentaire</label>
                <textarea class="form-control" id="commentaire" rows="3"></textarea>
            </div>


              <br>
              <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
          </form>
        </div>
      </div>
    </div>

    
<!-- Le pied de page -->
<?php include("../Includes/footer.php"); ?>