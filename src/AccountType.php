<?php

namespace src\Base;

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity @ORM\Table(name="accountType_tbl")
 */
class AccountType
{
    public function _construct()
    {
        $this->accounts = new ArrayColelction();
        $this->transactions = new ArrayCollection();

    }
    /**@ORM\Id @ORM\Column(type="integer") ORM\GeneratedValue */
    private $id;
    /**@ORM\Column(type="string") */
    private $name;
    /**
     * @ORM\OneToMany(targetEntity=src\Base\Account, mappedBy="type")
     */
    private $accounts;
    /**
     * @ORM\OneToMany(targetEntity=src\Base\Transaction, mappedBy="transact_id")
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