<!-- L'en-tête -->
<?php include("../Includes/header.php");
session_start();
?>


<center>
    <h1>Historique</h1>
</center>
<br>

<?php
//Je crée une connexion à la BDD
$db = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE . ";port=" . Config::PORT, Config::USER, Config::MDP);
//je prépare une requete
$r = $db->prepare("select * from CLIENT CL inner join COMMANDE CO on CO.id_client=CL.id_client");

//je lance la requete
$r->execute();
//je récupère le résultat (un tableau de lignes)
$lignes = $r->fetchAll();
?>



<!-- Le corps -->
 
<div class="container-fluid">
  <div class="row" style="">
    <div class="mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="">
      <form class="Historique" method="POST" action="../Controller/cHistorique.php">

            <table class="table table-hover table-light">
              <thead class="thead-dark">
                  <tr>
                  <th scope="col">Num commande</th>
                  <th scope="col">Date commande</th>
                  <th scope="col">Nom client</th>
                  <th scope="col">Prenom client</th>
                  </tr>
              </thead>
              <?php foreach ($lignes as $ligne){   ?>
              <tbody>
                  <tr>
                  <th scope="row"><?php echo $ligne["id_commande"] ?></th>
                  <td><?php echo $ligne["date_commande"] ?></td>
                  <td><?php echo $ligne["nom_client"] ?></td>
                  <td><?php echo $ligne["prenom_client"] ?></td>
                  </tr>
              </tbody>
              <?php }?>
            </table>

      </form>
    </div>
  </div>
</div>


<!-- Le pied de page -->
<?php include("../Includes/footer.php"); ?>