<?php
require_once("model/classes/language.class.php");
class LangageManager{
    private $lePDO;

    public function __construct($paramPDO)
    {
        $this->lePDO=$paramPDO;
    }

    public function fetchAllLanguages(){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM languages");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Langage");
            $resultat = $sql->fetchAll();
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }

    public function fetchLanguageByIdLanguage($id){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM languages where idLanguage=:id");
            $sql->bindParam(":id",$id);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Langage");
            $resultat = $sql->fetch();
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }
    public function updateLangage($id,$langageName){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("UPDATE languages set name=:name where idLanguage=:id");
            $sql->bindParam(":name",$langageName);
            $sql->bindParam(":id",$id);
            $sql->execute();
            return true;
    
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        } 
    }

    public function createLangage($langageName){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO languages values(null,:langageName)");
            $sql->bindParam(":langageName",$langageName);
            $sql->execute();
            return true;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        } 
    }

    public function deleteLangage($idLangage){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("DELETE FROM languages WHERE idLanguage=:id");
            $sql->bindParam(":id",$idLangage);
            $sql->execute();
            return true;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        } 
    }
}