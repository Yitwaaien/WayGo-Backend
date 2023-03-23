<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 */
class Page
{

    /**
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="date")
     */
    private $dateget;

    /**
     * @ORM\Column(type="time")
     */
    private $timeget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regionget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regionout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typewayget;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recipient;

    /**
     * @ORM\Column(type="integer")
     */
    private $inn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typepayment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDateget(): ?\DateTimeInterface
    {
        return $this->dateget;
    }

    public function setDateget(\DateTimeInterface $dateget): self
    {
        $this->dateget = $dateget;

        return $this;
    }

    public function getTimeget(): ?\DateTimeInterface
    {
        return $this->timeget;
    }

    public function setTimeget(\DateTimeInterface $timeget): self
    {
        $this->timeget = $timeget;

        return $this;
    }

    public function getRegionget(): ?string
    {
        return $this->regionget;
    }

    public function setRegionget(string $regionget): self
    {
        $this->regionget = $regionget;

        return $this;
    }

    public function getRegionout(): ?string
    {
        return $this->regionout;
    }

    public function setRegionout(string $regionout): self
    {
        $this->regionout = $regionout;

        return $this;
    }

    public function getTypeget(): ?string
    {
        return $this->typeget;
    }

    public function setTypeget(string $typeget): self
    {
        $this->typeget = $typeget;

        return $this;
    }

    public function getTypewayget(): ?string
    {
        return $this->typewayget;
    }

    public function setTypewayget(string $typewayget): self
    {
        $this->typewayget = $typewayget;

        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getInn(): ?int
    {
        return $this->inn;
    }

    public function setInn(int $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    public function getTypepayment(): ?string
    {
        return $this->typepayment;
    }

    public function setTypepayment(string $typepayment): self
    {
        $this->typepayment = $typepayment;

        return $this;
    }
}
