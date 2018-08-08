<?php

/**
* connection à la base de données
*/
class DbConnect{

	protected function PdoConnect(){

	    $host='localhost';
        $bdd='cpp-centre';
        $user='root';
        $pass='';

	    $db = new PDO('mysql:host='.$host.';dbname='.$bdd.';charset=utf8', $user, $pass);
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $db;
	}

}


