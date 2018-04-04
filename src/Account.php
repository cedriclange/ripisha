<?php


use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use src\Transaction;
/**
 * @Entity @Table(name="account_tbl")
 */
class Account
{
    public function _construct()
    {
        $this->transactions = new ArrayCollection();
    }  
    
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $name;
    /**
     * @Column(type="string")
     */
    private $identifier;
    /**
     * @ManyToOne(targetEntity="AccountType", inversedBy="accounts")
     * @JoinColumn(name="type")
     */
    private $type;
    /**
     * @Column(type="string")
     */
    private $deviceID;

     /**
     * @OneToMany(targetEntity="Transaction", mappedBy="transact_id")
     */
    private $transactions;
    /**@Column(type="decimal") */
    private $balance;

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
    public function type()
    {
        return $this->type;
    }

    /**
     * Set the value of accountType
     *
     * @return  self
     */ 
    public function setAccountType(AccountType $type)
    {
        $this->type = $type;

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

    /**
     * @return Collection/Transaction[]
     */ 
    public function getTransactions()
    {
        return $this->transactions;
    }

    

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}
?>