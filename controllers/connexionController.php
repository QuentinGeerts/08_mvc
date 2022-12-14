<?php 
    $msg = "";
    
    if ( isset($_POST['username'], $_POST['password'], $_SESSION['count']) ) {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        // Vérification que les champs ont bien été remplis
        if ($username !== "" && $password !== "" && $_SESSION['count'] < 3) {

            $_SESSION['count'] ++;

            if ($username === "admin" && $password === "admin") {

                $msg = "Connexion réussie";
                $_SESSION["nom"] = $username;

                $_SESSION['count'] = 0;

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

    if (isset($_SESSION['count']) && $_SESSION['count'] == 3) {
        $msg  = "<div class='error'>";
        $msg .= "Compte bloqué";
        $msg .= "</div>";
    }

    include("views/page/connexion.php");
