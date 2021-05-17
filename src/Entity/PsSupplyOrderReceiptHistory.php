<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrderReceiptHistory
 *
 * @ORM\Table(name="ps_supply_order_receipt_history", indexes={@ORM\Index(name="id_supply_order_detail", columns={"id_supply_order_detail"}), @ORM\Index(name="id_supply_order_state", columns={"id_supply_order_state"})})
 * @ORM\Entity
 */
class PsSupplyOrderReceiptHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_receipt_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderReceiptHistory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_lastname", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $employeeLastname = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_firstname", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $employeeFirstname = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderState;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdSupplyOrderReceiptHistory(): ?int
    {
        return $this->idSupplyOrderReceiptHistory;
    }

    public function getIdSupplyOrderDetail(): ?int
    {
        return $this->idSupplyOrderDetail;
    }

    public function setIdSupplyOrderDetail(int $idSupplyOrderDetail): self
    {
        $this->idSupplyOrderDetail = $idSupplyOrderDetail;

        return $this;
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

    public function getEmployeeLastname(): ?string
    {
        return $this->employeeLastname;
    }

    public function setEmployeeLastname(?string $employeeLastname): self
    {
        $this->employeeLastname = $employeeLastname;

        return $this;
    }

    public function getEmployeeFirstname(): ?string
    {
        return $this->employeeFirstname;
    }

    public function setEmployeeFirstname(?string $employeeFirstname): self
    {
        $this->employeeFirstname = $employeeFirstname;

        return $this;
    }

    public function getIdSupplyOrderState(): ?int
    {
        return $this->idSupplyOrderState;
    }

    public function setIdSupplyOrderState(int $idSupplyOrderState): self
    {
        $this->idSupplyOrderState = $idSupplyOrderState;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

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
