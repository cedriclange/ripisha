<?php
namespace Lemondrop\Ripisha\Base;

class Account
{
    /**ACCOUNT PROPERTIES */
    private $id;
    private $name;
    private $identifier;
    private $accountType;
    private $accountCurrency;
    private $deviceID;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of identifier
     */ 
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set the value of identifier
     *
     * @return  self
     */ 
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get the value of accountType
     */ 
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set the value of accountType
     *
     * @return  self
     */ 
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get the value of accountCurrency
     */ 
    public function getAccountCurrency()
    {
        return $this->accountCurrency;
    }

    /**
     * Set the value of accountCurrency
     *
     * @return  self
     */ 
    public function setAccountCurrency($accountCurrency)
    {
        $this->accountCurrency = $accountCurrency;

        return $this;
    }

    /**
     * Get the value of deviceID
     */ 
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * Set the value of deviceID
     *
     * @return  self
     */ 
    public function setDeviceID($deviceID)
    {
        $this->deviceID = $deviceID;

        return $this;
    }
}
?>