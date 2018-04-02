<?php
namespace src\Base;

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use src\Base\Transaction;
/**
 * @ORM\Entity @ORM\Table(name="account_tbl")
 */
class Account
{
    public function _construct()
    {
        $this->transactions = new ArrayCollection();
    }  
    /**ACCOUNT PROPERTIES */
    /**
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $identifier;
    /**
     * @ORM\ManyToOne(targetEntity="src\Base\AccountType", inversedBy="accounts")
     * @ORM\JoinColumn(name="accountype")
     */
    private $type;
    /**
     * @ORM\Column(type="string")
     */
    private $deviceID;

     /**
     * @ORM\OneToMany(targetEntity=src\Base\Account, mappedBy="transact_id")
     */
    private $transactions;

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
     * Get the value of transactions
     */ 
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set the value of transactions
     *
     * @return  self
     */ 
    public function setTransactions(Transaction $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
}
?>