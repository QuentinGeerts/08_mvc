<?php 
    $msg = "";
    
    if ( isset($_POST['username'], $_POST['password']) ) {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        // Vérification que les champs ont bien été remplis
        if ($username !== "" && $password !== "") {

            if ($username === "admin" && $password === "admin") {

                $msg = "Connexion réussie";
                $_SESSION["nom"] = $username;

                // Redirection après 2 secondes vers la page VIP
                header('refresh:2;url=?section=vip');

            }
            else {
                $msg  = "<div class='error'>";
                $msg .= "Identifiant/mot de passe incorrect.";
                $msg .= "</div>";
            }

        }
        else {
            $msg = "Veuillez entrer un identifiant/mot de passe.";
        }

    }

    include("views/page/connexion.php");
