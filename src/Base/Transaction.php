<?php
namespace src\Base;

use Doctrine\ORM\Annotation as ORM;

/**
 * @ORM\Entity @ORM\Table(name="transaction_tbl")
 */
class Transaction
{
    /**
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $from;
    /**
     * @ORM\Column(type="decimal")
     */
    private $amount;
    /**
     * @ORM\Column(type="string", length=5)
     */
    private $currency;
    /**
     * @ORM\ManyToOne(targetEntity="src\Base\Account", inversedBy="transactions")
     * @ORM\JoinColumn(name="account_id")
     */
    private $account;
    /**
     * @ORM\ManyToOne(targetEntity="src\Base\AccountType", inversedBy="transactions")
     * @ORM\JoinColumn(name="accountype")
     */
    private $type;
    /**
     * @ORM\Column(type="datetime")
     */
    private $transTime;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isCompleted;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of from
     */ 
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the value of from
     *
     * @return  self
     */ 
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of currency
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */ 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of account
     */ 
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set the value of account
     *
     * @return  self
     */ 
    public function setAccount(Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType(AccountType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of transTime
     */ 
    public function getTransTime()
    {
        return $this->transTime;
    }

    /**
     * Set the value of transTime
     *
     * @return  self
     */ 
    public function setTransTime($transTime)
    {
        $this->transTime = $transTime;

        return $this;
    }

    /**
     * Get the value of isCompleted
     */ 
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * Set the value of isCompleted
     *
     * @return  self
     */ 
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }
}