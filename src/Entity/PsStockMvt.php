<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsStockMvt
 *
 * @ORM\Table(name="ps_stock_mvt", indexes={@ORM\Index(name="id_stock", columns={"id_stock"}), @ORM\Index(name="id_stock_mvt_reason", columns={"id_stock_mvt_reason"})})
 * @ORM\Entity
 */
class PsStockMvt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_mvt", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStockMvt;

    /**
     * @var int
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false)
     */
    private $idStock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idOrder = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idSupplyOrder = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_stock_mvt_reason", type="integer", nullable=false)
     */
    private $idStockMvtReason;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_lastname", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $employeeLastname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_firstname", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $employeeFirstname = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="physical_quantity", type="integer", nullable=false)
     */
    private $physicalQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var int
     *
     * @ORM\Column(name="sign", type="smallint", nullable=false, options={"default"="1"})
     */
    private $sign = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_wa", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $lastWa = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_wa", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $currentWa = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="referer", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $referer = 'NULL';

    public function getIdStockMvt(): ?string
    {
        return $this->idStockMvt;
    }

    public function getIdStock(): ?int
    {
        return $this->idStock;
    }

    public function setIdStock(int $idStock): self
    {
        $this->idStock = $idStock;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdSupplyOrder(): ?int
    {
        return $this->idSupplyOrder;
    }

    public function setIdSupplyOrder(?int $idSupplyOrder): self
    {
        $this->idSupplyOrder = $idSupplyOrder;

        return $this;
    }

    public function getIdStockMvtReason(): ?int
    {
        return $this->idStockMvtReason;
    }

    public function setIdStockMvtReason(int $idStockMvtReason): self
    {
        $this->idStockMvtReason = $idStockMvtReason;

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

    public function getPhysicalQuantity(): ?int
    {
        return $this->physicalQuantity;
    }

    public function setPhysicalQuantity(int $physicalQuantity): self
    {
        $this->physicalQuantity = $physicalQuantity;

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

    public function getSign(): ?int
    {
        return $this->sign;
    }

    public function setSign(int $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getPriceTe(): ?string
    {
        return $this->priceTe;
    }

    public function setPriceTe(?string $priceTe): self
    {
        $this->priceTe = $priceTe;

        return $this;
    }

    public function getLastWa(): ?string
    {
        return $this->lastWa;
    }

    public function setLastWa(?string $lastWa): self
    {
        $this->lastWa = $lastWa;

        return $this;
    }

    public function getCurrentWa(): ?string
    {
        return $this->currentWa;
    }

    public function setCurrentWa(?string $currentWa): self
    {
        $this->currentWa = $currentWa;

        return $this;
    }

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(?string $referer): self
    {
        $this->referer = $referer;

        return $this;
    }


}
