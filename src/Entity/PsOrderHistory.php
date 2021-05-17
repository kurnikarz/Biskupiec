<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderHistory
 *
 * @ORM\Table(name="ps_order_history", indexes={@ORM\Index(name="id_order_state", columns={"id_order_state"}), @ORM\Index(name="order_history_order", columns={"id_order"}), @ORM\Index(name="id_employee", columns={"id_employee"})})
 * @ORM\Entity
 */
class PsOrderHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderHistory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrderState;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdOrderHistory(): ?int
    {
        return $this->idOrderHistory;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(int $idEmployee): self
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

    public function getIdOrderState(): ?int
    {
        return $this->idOrderState;
    }

    public function setIdOrderState(int $idOrderState): self
    {
        $this->idOrderState = $idOrderState;

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
