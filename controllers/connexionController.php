<?php 
    $msg = "";
    if(isset($_POST["nom"])){
        if($_POST["nom"] == "admin"){
            // connecté
            $_SESSION["nom"] = "admin";
            header("Location:?section=vip");
        }
        else {
            // msg erreur
            $msg="<p>Mot de passe incorrect</p>";
        }
    }

    include("views/page/connexion.php");
?>