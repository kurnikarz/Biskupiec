<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrderHistory
 *
 * @ORM\Table(name="ps_supply_order_history", indexes={@ORM\Index(name="id_state", columns={"id_state"}), @ORM\Index(name="id_supply_order", columns={"id_supply_order"}), @ORM\Index(name="id_employee", columns={"id_employee"})})
 * @ORM\Entity
 */
class PsSupplyOrderHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_history", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderHistory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrder;

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
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idState;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdSupplyOrderHistory(): ?int
    {
        return $this->idSupplyOrderHistory;
    }

    public function getIdSupplyOrder(): ?int
    {
        return $this->idSupplyOrder;
    }

    public function setIdSupplyOrder(int $idSupplyOrder): self
    {
        $this->idSupplyOrder = $idSupplyOrder;

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

    public function getIdState(): ?int
    {
        return $this->idState;
    }

    public function setIdState(int $idState): self
    {
        $this->idState = $idState;

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
