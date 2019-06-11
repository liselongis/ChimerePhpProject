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
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>


        <div class="form-group">
            <label for="metier_actuel">Métier actuel</label>
                <select class="form-control" id="metier_actuel">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>


              <div class="form-group"> <label></label>
                <input type="text" class="form-control" placeholder="Nombre d'heure">
              </div>
              <div class="form-group"> <label></label>
                <input type="email" class="form-control" placeholder="Commentaire">
              </div>

              <br>
              <button type="submit" class="btn btn-block btn-dark btn-lg" >OK</button>
          </form>
        </div>
      </div>
    </div>

    
<!-- Le pied de page -->
<?php include("../Includes/footer.php"); ?>