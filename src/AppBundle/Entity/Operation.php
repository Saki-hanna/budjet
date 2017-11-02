<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table(name="operation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OperationRepository")
 */
class Operation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bankDate", type="datetime", nullable=true)
     */
    private $bankDate;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_reference", type="string", length=255, nullable=true)
     */
    private $bankReference;

    /**
     * @var bool
     *
     * @ORM\Column(name="credit", type="boolean")
     */
    private $credit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchaseDate", type="datetime")
     */
    private $purchaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var bool
     *
     * @ORM\Column(name="bank_check", type="boolean")
     */
    private $bankCheck;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bankDate
     *
     * @param \DateTime $bankDate
     *
     * @return Operation
     */
    public function setBankDate($bankDate)
    {
        $this->bankDate = $bankDate;

        return $this;
    }

    /**
     * Get bankDate
     *
     * @return \DateTime
     */
    public function getBankDate()
    {
        return $this->bankDate;
    }

    /**
     * Set bankReference
     *
     * @param string $bankReference
     *
     * @return Operation
     */
    public function setBankReference($bankReference)
    {
        $this->bankReference = $bankReference;

        return $this;
    }

    /**
     * Get bankReference
     *
     * @return string
     */
    public function getBankReference()
    {
        return $this->bankReference;
    }

    /**
     * Set credit
     *
     * @param boolean $credit
     *
     * @return Operation
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return bool
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return Operation
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Operation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set bankCheck
     *
     * @param boolean $bankCheck
     *
     * @return Operation
     */
    public function setBankCheck($bankCheck)
    {
        $this->bankCheck = $bankCheck;

        return $this;
    }

    /**
     * Get bankCheck
     *
     * @return bool
     */
    public function getBankCheck()
    {
        return $this->bankCheck;
    }
}

