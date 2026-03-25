<<?php
    //acceder a la class
    require_once "classlogin.php";
    //nouvelle variable faisant partie de la classe
    $utilisateur = new login();

    //avoir le username entre dans le lien
    $utilisateur->getUname($_GET['user']);
    //avoir le password entre dans le lien
    $utilisateur->getPass($_GET['pass']);
    //esseyer la connexion (retourne un string avec 0(incorrect) 1(correct))
    $utilisateur->tryLogin();
    /*$utilisateur->getUname("ADMIN");
    $utilisateur->getPass("1234");
    $utilisateur->tryLogin();*/
?>