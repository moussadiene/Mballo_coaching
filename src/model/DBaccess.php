<?php

    class DBaccess{

        public function __construct()
        {
        }

        public function getConnexion()
        {
            $host = 'localhost';
            $user = 'djine';
            $password = 'mosila21';
            $dbname = 'gestionstocks';

            $dsn = "mysql:host=".$host.";dbname=".$dbname;

            $db = null;
            try {
                $db = new PDO($dsn,$user,$password);
            } catch (PDOException $ex) {
                die('Erreur de connexion a la base de données');
            }

            return $db;
        }

        public function maj($requete)
        {
            $db = $this->getConnexion();
            return $db->prepare($requete);
        }

        public function selection($requete)
        {
            $db = $this->getConnexion();
            return $db->query($requete);
        }
    }

?>