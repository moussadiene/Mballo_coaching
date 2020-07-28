<?php

    class Categorie{

        private $id;
        private $libelle;

        public function __contruct()
        {
            # code
        }

        public function getID()
        {
            return $this->id;
        }

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($lib)
        {
            $this->libelle = $lib;
        }


    }
?>