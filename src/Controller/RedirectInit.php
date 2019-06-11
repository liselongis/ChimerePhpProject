<?php
if (!empty($_SESSION["employe"])) {
    
//Si l'id_metier est égale à XXX alors appeler une page de l'id_metier

    if($_SESSION["employe"]["id_metier"]==1){
        header("Location: ../View/Page_Fondeur_Mouleur.php");
    }

    elseif($_SESSION["employe"]["id_metier"]==2){
        header("Location: ../View/Page_Polisseur.php");
    }

    elseif($_SESSION["employe"]["id_metier"]==3){
        header("Location: ../View/Page_Tailleur.php");
    }

    elseif($_SESSION["employe"]["id_metier"]==4){
        header("Location: ../View/Page_Sertisseur.php");
    }

    else
    {
        header("Location: ../View/PageEmploye.php");
    }

    //Je retourne à l'index
    
}
?>