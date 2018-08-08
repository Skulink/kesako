<?php

require_once('DbConnect.php');

class ConnexionManager extends DbConnect {

    public function verifyId($nni){

        $db = $this->PdoConnect();
        $infoAdmin = $db->prepare('
          SELECT MDP, idHabilitation, id, nni
          FROM `cpp-centre`.identification 
          WHERE nni = :nni');
        $infoAdmin->bindValue(":nni", $nni, PDO::PARAM_STR);
        $infoAdmin->execute();

        return $infoAdmin;

    }

}
