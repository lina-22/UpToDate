<?php
require_once("model/classes/destination.class.php");
class DestinationManager{
    private $lePDO;
    public function __construct($foo)
    {
     $this->lePDO=$foo;   
    }

    public function fetchAllDestinationOrderByName(){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM destinations order by name");
            $sql->execute();
            // fetch mode definir le mode de recuperation des données
            $sql->setFetchMode(PDO::FETCH_CLASS,"Destination");
            $resultat = $sql->fetchAll();
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }
    public function fetchDestinationByIdDestination($unId){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM destinations WHERE idDestination=:aId");
            $sql->bindParam(":aId",$unId);
            $sql->execute();
            // fetch mode definir le mode de recuperation des données
            $sql->setFetchMode(PDO::FETCH_CLASS,"Destination");
            $resultat = $sql->fetch();
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }
}

?>