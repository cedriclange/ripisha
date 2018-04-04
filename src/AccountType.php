<?php


use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use src\Account;
use src\Transaction;

/**
 * @Entity @Table(name="accountType_tbl")
 */
class AccountType
{
    public function _construct()
    {
        $this->accounts = new ArrayColelction();
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
     * @OneToMany(targetEntity="Account", mappedBy="type")
     */
    private $accounts;
    /**
     * @OneToMany(targetEntity="Transaction", mappedBy="transact_id")
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
     * @return Collection/Account[]
     */ 
    public function getAccounts()
    {
        return $this->accounts;
    }
}
?>