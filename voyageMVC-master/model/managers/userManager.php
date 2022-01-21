<?php
require_once("model/classes/user.class.php");
class UserManager{

    public  $lePDO;

    /**
     * Constructeur de la classe UserManager
     *
     * @param [type] $unPDO 
     */
    public function __construct($unPDO)
    {
        $this->lePDO=$unPDO;
    }

    public function fetchUserByEmailAndPassword($email,$password){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM users where users.password=sha2(:password,512) and email=:email");
            $sql->bindParam(":password",$password);
            $sql->bindParam(":email",$email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"User");
            $resultat = ($sql->fetch());
            return $resultat;
    
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
    public function createUser($name,$firstName,$email,$password){
       //	idUser 	name 	firstname 	email 	password 	idRole 
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("INSERT INTO users values(null,:aName,:firstname,:email,:password,3)");
            $sql->bindParam(":name",$name);
            $sql->bindParam(":firstname",$firstName);
            $sql->bindParam(":email",$email);
            $sql->bindParam(":password",$password);
            $sql->execute();
            return true;
    
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        } 
    }
}
?>