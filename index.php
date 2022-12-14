<?php 
    session_start();

    $page = "";


    include("views/html/header.php");
    if(isset($_SESSION["nom"])){
        include("views/menu/nav-co.php");
    }
    else {
        include("views/menu/nav-deco.php");
    }
    

    include("controllers/router.php");
    include("views/html/footer.php");
?>