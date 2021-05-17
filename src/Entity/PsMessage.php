<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMessage
 *
 * @ORM\Table(name="ps_message", indexes={@ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="message_order", columns={"id_order"}), @ORM\Index(name="id_cart", columns={"id_cart"})})
 * @ORM\Entity
 */
class PsMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCart = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idEmployee = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=false, options={"default"="1"})
     */
    private $private = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function setIdCart(?int $idCart): self
    {
        $this->idCart = $idCart;

        return $this;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->private = $private;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }


}
