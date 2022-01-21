<?php
class Role{
    private $idRole;
    private $name;
    

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->name = $nom;
    }

}
?>