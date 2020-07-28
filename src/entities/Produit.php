<?php

    class Produit{

        private $id;
        private $designation;
        private $prix;
        private $quantite;
        private $categorie;

        public function __contruct()
        {
            
        }

        public function getID()
        {
            return $this->id;
        }

        public function getDesignation()
        {
            return $this->designation;
        }

        public function setDesignation($des)
        {
            $this->designation = $des;
        }

        public function getPrix()
        {
            return $this->prix;
        }

        public function setPrix($prix)
        {
            $this->prix = $prix;
        }

        public function getQuantite()
        {
            return $this->quantite;
        }

        public function setQuantitie($qte)
        {
            $this->quantite = $qte;
        }

        public function getCategorie()
        {
            return $this->categorie;
        }

        public function setCategorie($cat)
        {
            $this->categorie = $cat;
        }

    }
?>