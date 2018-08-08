<?php

require_once('model/PublicationManager.php');
require_once ('model/AppManager.php');


//appel la fonction pour afficher les publication et la vue sur laquelle l'afficher
function homepage(){


    $publicationManager = new PublicationManager();
    $lastPubli = $publicationManager->getPublication();


    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();



    require('view/visitor/accueil.php');
}

function exploKesako(){

    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/visitor/explorateurKesako.php');
}

function ficheKesako(){

    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/visitor/ficheKesako.php');
}

function resultSearch(){

    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/visitor/resultatsRecherche.php');
}
