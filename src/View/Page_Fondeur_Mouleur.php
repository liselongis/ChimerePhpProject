<!-- L'en-tête -->
<?php include("../Includes/header.php"); ?>

<!-- Le corps -->

    <div id="corps">
            <div class="container-fluid">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>Fondeur/Mouleur</h1>
                    </div>
                </div> 
            </div> 
    </div>



<!-- Le corps -->

<div id="">
        <div class="container-fluid">
            <div class="row">

                    <article class="text-center mx-auto col-xs-5 col-sm-4 col-md-3 col-lg-2 col-xl-2 margin-button">
                        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='../View/Historique.php'">
                            <img style="width:100%" src="../Pictures/past.png" alt="Logo-Chimere"/>
                            Historique
                        </button>
                    </article>

                    <article class="text-center mx-auto col-xs-5 col-sm-4 col-md-3 col-lg-2 col-xl-2 margin-button">
                        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='../View/Fiche_de_suivi.php'">
                            <img style="width:100%" src="../Pictures/document.png" alt="Logo-Chimere"/>
                            Fiche de suivi
                        </button>
                    </article>

            </div>
        </div>
    </div>


<!-- pied de page -->
<?php include("../Includes/footer.php"); ?>