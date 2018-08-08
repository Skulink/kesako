<?php

require_once ("model/DbConnect.php");

/**
 * gestion des publications administrateur
 */


class PublicationManager extends DbConnect{

    public function postPublication($titreArticle, $contenuArticle, $id){

        $db = $this->PdoConnect();
        $req = $db->prepare('
        INSERT INTO `cpp-centre`.kesako_article(titre_article, contenu_article, date_creation_article, id)
        VALUES (:titreArticle, :contenuArticle, NOW(), :id)');
        $req->bindValue(":titreArticle", $titreArticle, PDO::PARAM_STR);
        $req->bindValue(":contenuArticle", $contenuArticle, PDO::PARAM_STR);
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();

    }



    //Retourne les 5 dernières publications de la plus récente à la plus ancienne.
    public function getPublication(){

        $db = $this->PdoConnect();
        $req = $db->prepare('
          SELECT ka.titre_article titreArticle, ka.contenu_article articleContent, DATE_FORMAT(ka.date_creation_article, \'%d/%m/%Y à            %Hh%i\') dateCreation, YEAR(ka.date_creation_article) anneeCreation, a.Nom nomAuteur, a.Prenom prenomAuteur 
          FROM `cpp-centre`.kesako_article ka
          INNER JOIN `cpp-centre`.identification a
          ON a.id = ka.id
          ORDER BY date_creation_article DESC 
          LIMIT 0,5');
        $req->execute();
        return $req;
    }



    //Retourne les publications concernés par le mois et l'année d'entrée.
    public function searchPubli($moisCreation, $anneeCreation){

        $db = $this->PdoConnect();
        $searchPublication = $db->prepare('
          SELECT ka.id_article idArticle, ka.titre_article titreArticle, ka.contenu_article articleContent, DATE_FORMAT(ka.date_creation_article, \'%d/%m/%Y à %Hh%i\') dateCreation, a.Nom nomAuteur, a.Prenom prenomAuteur 
          FROM `cpp-centre`.kesako_article ka
          INNER JOIN `cpp-centre`.identification a
          ON a.id = ka.id
          WHERE MONTH(date_creation_article) = :moisCreation AND YEAR(date_creation_article) = :anneeCreation
          ORDER BY date_creation_article DESC ');
        $searchPublication->bindValue(":moisCreation", $moisCreation , PDO::PARAM_INT);
        $searchPublication->bindValue(":anneeCreation", $anneeCreation, PDO::PARAM_INT);
        $searchPublication->execute();
        return $searchPublication;
    }



    //met a jour le contenu et le titre d'une publication
    public function setPublication($idPublication, $titrePublication, $contenuPublication){

        $db = $this->PdoConnect();
        $updateArticle = $db->prepare('
        UPDATE `cpp-centre`.kesako_article 
        SET titre_article= :titrePublication, contenu_article= :contenuPublication 
        WHERE id_article = :idPublication');
        $updateArticle->bindValue(":idPublication", $idPublication, PDO::PARAM_INT);
        $updateArticle->bindValue(":titrePublication", $titrePublication, PDO::PARAM_STR);
        $updateArticle->bindValue(":contenuPublication", $contenuPublication, PDO::PARAM_STR);
        $updateArticle->execute();
    }



    //suppression d'une publication
    public function deletePublication($idPublication){

        $db = $this->PdoConnect();
        $deleteArticle = $db->prepare('
        DELETE FROM `cpp-centre`.kesako_article 
        WHERE id_article = :idPublication');
        $deleteArticle->bindValue(":idPublication", $idPublication, PDO::PARAM_INT);
        $deleteArticle->execute();

    }

}
