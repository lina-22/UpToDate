<?php
require_once("model/managers/roleManager.php");
class User{
    //	idUser 	name 	firstname 	email 	password 	idRole 
    private $idUser;
    private $name;
    private $firstname;
    private $email;
    private $password;
    private $idRole;

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of idRole
     */ 
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * methode qui permet de recupere le role d'un utilisateur
     *
     * @param [type] $lePDO un objet de type PDO (la co a la BDD)
     * @return Role le role de l'utilisateur sous la forme d'un objet
     */
    public function role($lePDO){
        $objectRoleManager= new RoleManager($lePDO);
        $role=$objectRoleManager->fetchRoleByIdRole($this->getIdRole());
        return $role;
    }


}