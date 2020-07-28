<?php

    require_once '../entities/Categorie.php';
    require_once 'DBaccess.php';
    class CategorieDB{

        public function __construct()
        {
        }
        public function addCategorie($Categorie)
        {
            $sql = 'INSERT INTO `categorie`(`id`, `libelle`) VALUES (null,?)';
            $access = new DBaccess();
            $prepare = $access->maj($sql);

            return $prepare->execute(array($Categorie->getLibelle()));
        }

        public function getAll()
        {
            $sql = 'SELECT * FROM categorie';
            $access = new DBaccess();
            $prepare = $access->selection($sql);

            return $prepare;

        }

        public function findbyID($id)
        {
            $sql = "SELECT * FROM categorie WHERE id = $id";
            $access = new DBaccess();

            $prepare = $access->selection($sql);

            return $prepare;

        }
    }
?>