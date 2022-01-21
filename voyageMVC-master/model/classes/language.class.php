<?php
class Langage{
    private $idLanguage;
    private $name;
    

    /**
     * Get the value of idLanguage
     */ 
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Set the value of idLanguage
     *
     * @return  self
     */ 
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

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
}

?>