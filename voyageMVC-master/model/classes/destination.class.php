<?php
class Destination {
    private $idDestination;
    private $name;
    private $description;
    private $openingDate;
    private $closingDate;
    private $price;
    private $isAvailable;
    private $duration;
    private $idCountry;


    public function getDescriptionTruncated($chars=70){
        
        $text=$this->description;
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
        

    }
    /**
     * Get the value of idDestination
     */ 
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set the value of idDestination
     *
     * @return  self
     */ 
    public function setIdDestination($idDestination)
    {
        $this->idDestination = $idDestination;

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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of openingDate
     */ 
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * Set the value of openingDate
     *
     * @return  self
     */ 
    public function setOpeningDate($openingDate)
    {
        $this->openingDate = $openingDate;

        return $this;
    }

    /**
     * Get the value of closingDate
     */ 
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * Set the value of closingDate
     *
     * @return  self
     */ 
    public function setClosingDate($closingDate)
    {
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of isAvailable
     */ 
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     *
     * @return  self
     */ 
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of idCountry
     */ 
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set the value of idCountry
     *
     * @return  self
     */ 
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }
}
?>