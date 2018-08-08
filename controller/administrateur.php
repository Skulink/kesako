<?php
require_once ('model/AppManager.php');
require_once ('model/ConnexionManager.php');
require_once('model/PublicationManager.php');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                              GESTION CONNEXION                                                  */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//gestion du panneau de connexion administrateur et initialisation du $_SESSION
function gestionConnexion()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    $publicationManager = new PublicationManager();
    $lastPubli = $publicationManager->getPublication();

    $connexionManager = new ConnexionManager();
    $controlId = $connexionManager->verifyId($_POST['nni']);
    $encryptMdp = md5($_POST['mdp']);

    foreach ($controlId as $idDonnees) {
        if ($idDonnees['MDP'] == $encryptMdp) {
            if ($idDonnees['idHabilitation'] > 1) {
                $_SESSION['nni'] = $_POST['nni'];
                $_SESSION['id'] = $idDonnees['id'];
                echo '<h5 id="msgIdConnexion">Vous êtes connectés en tant qu\'administrateur</h5>';
                require('view/admin/accueilAdmin.php');
            } else {
                echo '<h5 id="msgIdErreur1">Vous n\'êtes pas autorisé à accéder à l\'interface administrateur</h5>';
                require('view/visitor/accueil.php');
            }
        } else {
            echo '<h5 id="msgIdErreur1">Le NNI ou le mot de passe sont incorrects</h5>';
            require('view/visitor/accueil.php');
        }
    }
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                              PAGE D'ACCUEIL ADMIN                                            */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//appel des publication et des applications de la navbar pour la page d'accueil admin
function homepageAdmin()
{
    $publicationManager = new PublicationManager();
    $lastPubli = $publicationManager->getPublication();

    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/accueilAdmin.php');
}




//gestion de la deconnexion utilisateur
function decoAdmin(){

    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    $publicationManager = new PublicationManager();
    $lastPubli = $publicationManager->getPublication();

    $_SESSION = array();
    session_destroy();

    require('view/visitor/accueil.php');
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                              PAGE DE GESTION DES APPLICATIONS                                */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//appel des application et des services pour la page admin de gestion des applications
function gestionApp()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();

    require('view/admin/gestionApplication.php');
}




//affichage après modification d'une application
function gestionAppValid()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();

    require('view/admin/gestionApplicationValid.php');
}




//affichage après suppression d'une application
function gestionAppSuppr()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();

    require('view/admin/gestionApplicationSuppr.php');
}




//liste de toutes les applications
function searchApplication()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();
    $searchApp = $appManager->searchApplication($_POST['application']);

    require('view/admin/gestionApplication.php');
}




//modification ou suppression des applications
function setApp()
{
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();

    if (isset($_POST['modifier'])) {
        $updateApp = $appManager->setApp($_POST['idApp'], $_POST['nomApp'], $_POST['urlApp']);
        header('Location: index.php?action=gestionAppModif');
    } elseif (isset($_POST['supprimer'])) {
        $suppressionApp = $appManager->deleteApp($_POST['idApp']);
        header('Location: index.php?action=gestionAppSuppr');
    }
}



//insertion d'une nouvelle application
function insertApplication(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();
    $listeAjoutServices = $appManager->getServ();
    $listeModifTel = $appManager->getAppTelephonie();
    $listeModifRel = $appManager->getAppReleve();
    $listeModifGin = $appManager->getAppGinko();
    $listeModifRaf = $appManager->getAppRaf();
    $listeModifDis = $appManager->getAppDisco();
    $insertionApp = $appManager->postApp($_POST['appName'], $_POST['appUrl'], $_POST['appService'], $_SESSION['id']);

    header('Location: index.php?action=gestionAppInsert');
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                       PAGE DE GESTION DES PUBLICATIONS                                       */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//accès a la page des publications
function gestionPubli(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/gestionPublication.php');
}




//insertion d'une publication
function insertPublication(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    $publiManager = new PublicationManager();
    $publiManager->postPublication($_POST['titre'], $_POST['publication'], $_SESSION['id']);

    header('Location: index.php?action=insertPubliValid');
}




//recherche d'une publication
function searchPublication(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    $publiManager = new PublicationManager();
    $resultPublication = $publiManager->searchPubli($_POST['month'], $_POST['years']);

    require('view/admin/gestionPublication.php');
}



//modifier ou supprimer une application
function setPublication(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    $publiManager = new PublicationManager();

    if (isset($_POST['modifier'])) {
        $publiManager->setPublication($_POST['idPublication'], $_POST['titre'], $_POST['publication']);
        header('Location: index.php?action=updatePubliValid');
    } elseif (isset($_POST['supprimer'])) {
        $publiManager->deletePublication($_POST['idPublication']);
        header('Location: index.php?action=supprPubliValid');
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                       PAGE DE GESTION DES PUBLICATIONS                                       */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//accès a la page des publications
function creationKesako(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/creationFicheKesako.php');
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                       PAGE DE GESTION DES CATEGORIE                                          */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//accès a la page de gestion des catégories
function gestionCategories(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/gestionCategorie.php');
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                  PAGE DE GESTION DES SOUS-CATEGORIE                                          */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//accès a la page de gestion des sous-catégories
function gestionSousCategories(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/gestionSousCategorie.php');
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                  PAGE DE GESTION DES FICHES KESAKO                                          */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//accès a la page de gestion des sous-catégories
function gestionFichesKesako(){
    $appManager = new AppManager();
    $listeApplication1 = $appManager->getApp();
    $listeApplication2 = $appManager->getApp();
    $listeApplication3 = $appManager->getApp();
    $listeApplication4 = $appManager->getApp();
    $listeApplication5 = $appManager->getApp();

    require('view/admin/gestionFichesKesako.php');
}
