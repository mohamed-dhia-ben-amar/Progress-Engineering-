<?php

include "C:/xampp/htdocs/Login/connection.php";
require_once 'C:/xampp/htdocs/Login/Cruds/Model/Profil.php';

class ProfilC
{
    function ajouterProfil($Profil)
    {
        $sql = "insert into profil (ID , Name, PWD)
        values (:ID, :Name, :PWD)";
        $db = connection::getConnexion();
        try {
            $query = $db->prepare($sql);
            $id = $Profil->getid();
            $Name = $Profil->getName();
            $PWD = $Profil->getPWD();
            $query->bindValue(':ID', $id);
            $query->bindValue(':Name', $Name);
            $query->bindValue(':PWD', $PWD);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter profil' . $e->getMessage();
        }
    }
}
