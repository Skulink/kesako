
<?php

require_once("DbConnect.php");


/**
 * Gestion des applications administrateur
**/
class AppManager extends DbConnect
{


    //insertion d'une nouvelle application dans la base de donnée
    public function postApp($nomApplication, $adresseApplication, $idService, $id){

        $db = $this->PdoConnect();
        $req = $db->prepare('
        INSERT INTO `cpp-centre`.kesako_application(nom_application, adresse_application, id_service, id) 
        VALUES (:nomApplication, :adresseApplication, :idService, :id)');
        $req->bindValue(":nomApplication", $nomApplication, PDO::PARAM_STR);
        $req->bindValue(":adresseApplication", $adresseApplication, PDO::PARAM_STR);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->bindValue(":idService", $idService, PDO::PARAM_INT);
        $req->execute();
    }



    //Retourne l'ensemble des applications et des services
    public function getApp(){

        $db = $this->PdoConnect();
        $listApp = $db->prepare('
        SELECT ka.nom_application nomApp, ka.adresse_application urlApp, ks.nom_service nomServ, ks.id_service idServ
        FROM `cpp-centre`.kesako_application ka
        INNER JOIN `cpp-centre`.kesako_service ks
        ON ka.id_service = ks.id_service');
        $listApp->execute();

        return $listApp;
    }



    //liste des applications du service telephonie
    public function getAppService($idService){
        $db = $this->PdoConnect();
        $appServ = $db->prepare('
        SELECT nom_application
        FROM `cpp-centre`.kesako_application
        WHERE id_service = :idService');
        $appServ->bindValue(":idService", $idService, PDO::PARAM_INT);
        $appServ->execute();

        return $appServ;
    }



    //liste des services
    public function getServ(){

        $db = $this->PdoConnect();
        $req = $db->prepare('
        SELECT nom_service, id_service
        FROM `cpp-centre`.kesako_service
        ORDER BY id_service
        ');
        $req->execute();

        return $req;
    }



    //liste des services telephonie
    public function getAppTelephonie(){

        $db = $this->PdoConnect();
        $servTel = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
        WHERE id_service= 1
        ORDER BY nom_application;
        ');
        $servTel->execute();

        return $servTel;
    }



    //liste des services releve
    public function getAppReleve(){

        $db = $this->PdoConnect();
        $servRel = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
         WHERE id_service= 2
        ORDER BY nom_application;
        ');
        $servRel->execute();

        return $servRel;
    }



    //liste des services ginko
    public function getAppGinko(){

        $db = $this->PdoConnect();
        $servGin = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
         WHERE id_service= 3
        ORDER BY nom_application;
        ');
        $servGin->execute();

        return $servGin;
    }



    //liste des services R.A.F.
    public function getAppRaf(){

        $db = $this->PdoConnect();
        $servRaf = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
         WHERE id_service= 4
        ORDER BY nom_application;
        ');
        $servRaf->execute();

        return $servRaf;
    }



    //liste des services Disco
    public function getAppDisco(){

        $db = $this->PdoConnect();
        $servDis = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
         WHERE id_service= 5
        ORDER BY nom_application;
        ');
        $servDis->execute();

        return $servDis;
    }



    //recherche d'une application
    public function searchApplication($idApplication){

        $db = $this->PdoConnect();
        $search = $db->prepare('
        SELECT nom_application, adresse_application, id_application
        FROM `cpp-centre`.kesako_application
        WHERE id_application = :idApplication ');
        $search->bindValue(":idApplication", $idApplication, PDO::PARAM_INT);
        $search->execute();

        return $search;
    }



    //mise a jour d'une application
    public function setApp($idApplication, $nomApplication, $adresseApplication){

        $db = $this->PdoConnect();
        $setApplication = $db->prepare('UPDATE `cpp-centre`.kesako_application SET nom_application= :nomApplication, adresse_application= :adresseApplication WHERE id_application = :idApplication');
        $setApplication->bindValue(":idApplication", $idApplication, PDO::PARAM_INT);
        $setApplication->bindValue(":adresseApplication", $adresseApplication, PDO::PARAM_STR);
        $setApplication->bindValue(":nomApplication", $nomApplication, PDO::PARAM_STR);
        $setApplication->execute();
    }



    //suppression d'une application
    public function deleteApp($idApplication){

        $db = $this->PdoConnect();
        $req = $db->prepare('DELETE FROM `cpp-centre`.kesako_application WHERE id_application= :idApplication');
        $req->bindValue(":idApplication", $idApplication, PDO::PARAM_INT);
        $req->execute();
    }




}

