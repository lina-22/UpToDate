<?php
require_once ("model/classes/role.class.php");
class RoleManager
{
    public $lePDO;

    /**
     * Constructeur de la classe UserManager
     *
     * @param [type] $unPDO
     */
    public function __construct($unPDO)
    {
        $this->lePDO = $unPDO;
    }

    public function fetchRoleByIdRole($id){
        try {
            $connex=$this->lePDO;
            $sql =$connex->prepare("SELECT * FROM roles where idRole=:id");
            $sql->bindParam(":id",$id);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_CLASS,"Role");
            $resultat = ($sql->fetch());
            return $resultat;

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
?>