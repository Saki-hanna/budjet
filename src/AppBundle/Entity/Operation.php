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
     * @ORM\Column(name="ticketDate", type="date", nullable=true)
     */
    private $ticketDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bankDate", type="date", nullable=true)
     */
    private $bankDate;

    /**
     * @var float
     *
     * @ORM\Column(name="amound", type="float", nullable=true)
     */
    private $amound;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category")
     * @ORM\JoinColumn(nullable=true)
     */
    private $category;


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
     * Set ticketDate
     *
     * @param \DateTime $ticketDate
     *
     * @return Operation
     */
    public function setTicketDate($ticketDate)
    {
        $this->ticketDate = $ticketDate;

        return $this;
    }

    /**
     * Get ticketDate
     *
     * @return \DateTime
     */
    public function getTicketDate()
    {
        return $this->ticketDate;
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
     * Set amound
     *
     * @param float $amound
     *
     * @return Operation
     */
    public function setAmound($amound)
    {
        $this->amound = $amound;

        return $this;
    }

    /**
     * Get amound
     *
     * @return float
     */
    public function getAmound()
    {
        return $this->amound;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Operation
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
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
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }


}

