<?php

session_start();


require('controller/visiteur.php');
require('controller/administrateur.php');


try {

    if (isset($_SESSION['nni'])) {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'homepageAdmin') {
                homepageAdmin();

            }elseif ($_GET['action'] == 'gestionApp') {
                gestionApp();

            }elseif ($_GET['action'] == 'gestionAppModif'){
                echo '<h5 id="msgIdConnexion">L\'application a bien été modifié !</h5>';
                gestionApp();

            }elseif ($_GET['action'] == 'gestionAppSuppr') {
                echo '<h5 id="msgIdErreur1">L\'application a bien été supprimé !</h5>';
                gestionApp();

            }elseif($_GET['action'] == 'gestionAppInsert') {
                echo '<h5 id="msgIdConnexion">L\'application a bien été ajouté !</h5>';
                gestionApp();

            }elseif ($_GET['action'] == 'decoAdmin'){
                decoAdmin();

            }elseif ($_GET['action'] == 'searchApp'){
               searchApplication();

            }elseif ($_GET['action'] == 'setApp'){
                setApp();

            }elseif ($_GET['action'] == 'creationApp'){
                if (!empty($_POST['appService']) && !empty($_POST['appName']) && !empty($_POST['appUrl'])){
                    insertApplication();
                }else{
                    echo '<h5 id="msgIdErreur1">Tous les champs ne sont pas remplis!</h5>';
                    gestionApp();
                }
            }elseif ($_GET['action'] == 'gestionPubli'){
                gestionPubli();

            }elseif ($_GET['action'] == 'insertPubli'){
                if (!empty($_POST['titre']) && !empty($_POST['publication'])){
                    insertPublication();
                }else{
                    echo '<h5 id="msgIdErreur1">Tous les champs ne sont pas remplis!</h5>';
                    gestionPubli();
                }

            }elseif ($_GET['action'] == 'insertPubliValid'){
                echo '<h5 id="msgIdConnexion">Votre message a bien été publié !</h5>';
                gestionPubli();

            }elseif ($_GET['action'] == 'searchPubli'){
                searchPublication();

            }elseif ($_GET['action'] == 'updateArticle') {
                setPublication();

            }elseif($_GET['action'] == 'updatePubliValid'){
                echo '<h5 id="msgIdConnexion">Le contenu à été mis à jour</h5>';
                gestionPubli();

            }elseif($_GET['action'] == 'supprPubliValid'){
                echo '<h5 id="msgIdErreur1">Le contenu a bien été supprimé !</h5>';
                gestionPubli();

            }elseif($_GET['action'] == 'gestionFiche'){
                creationKesako();

            }elseif($_GET['action'] == 'gestionCategorie'){
                gestionCategories();

            }elseif($_GET['action'] == 'gestionSousCategorie'){
                gestionSousCategories();

            }elseif($_GET['action'] == 'gestionFichesKesako'){
                gestionFichesKesako();

            }elseif ($_GET['action'] == 'exploKesako') {
                exploKesako();
            }elseif ($_GET['action'] == 'ficheKesako') {
                ficheKesako();
            }elseif ($_GET['action'] == 'resultSearch') {
                resultSearch();
            }

        } else {
            homepageAdmin();
        }


    }else {

        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'homepage') {
                homepage();


            } elseif ($_GET['action'] == 'gestionConnexion') {

                if (!empty($_POST['nni']) && !empty($_POST['mdp'])) {
                    gestionConnexion();
                } else {
                    echo '<h5 id="msgIdErreur1">Tous les champs ne sont pas remplis !</h5>';
                    homepage();
                }

            }elseif ($_GET['action'] == 'exploKesako'){
                exploKesako();

            }elseif ($_GET['action'] == 'ficheKesako'){
                ficheKesako();
            }elseif ($_GET['action'] == 'resultSearch') {
                resultSearch();
            }
        } else {
            homePage();
        }


    }
}



catch(Exception $e){

	 die($e->getMessage());

}
