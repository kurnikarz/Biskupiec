<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrder
 *
 * @ORM\Table(name="ps_supply_order", indexes={@ORM\Index(name="reference", columns={"reference"}), @ORM\Index(name="id_supplier", columns={"id_supplier"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class PsSupplyOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplier;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_name", type="string", length=64, nullable=false)
     */
    private $supplierName;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrderState;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ref_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idRefCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_delivery_expected", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateDeliveryExpected = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTe = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_with_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalWithDiscountTe = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_tax", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTax = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ti", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $totalTi = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountRate = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="discount_value_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $discountValueTe = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=true)
     */
    private $isTemplate = '0';

    public function getIdSupplyOrder(): ?int
    {
        return $this->idSupplyOrder;
    }

    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    public function setIdSupplier(int $idSupplier): self
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    public function setSupplierName(string $supplierName): self
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }

    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
    }

    public function setIdWarehouse(int $idWarehouse): self
    {
        $this->idWarehouse = $idWarehouse;

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

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    public function getIdRefCurrency(): ?int
    {
        return $this->idRefCurrency;
    }

    public function setIdRefCurrency(int $idRefCurrency): self
    {
        $this->idRefCurrency = $idRefCurrency;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

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

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    public function getDateDeliveryExpected(): ?\DateTimeInterface
    {
        return $this->dateDeliveryExpected;
    }

    public function setDateDeliveryExpected(?\DateTimeInterface $dateDeliveryExpected): self
    {
        $this->dateDeliveryExpected = $dateDeliveryExpected;

        return $this;
    }

    public function getTotalTe(): ?string
    {
        return $this->totalTe;
    }

    public function setTotalTe(?string $totalTe): self
    {
        $this->totalTe = $totalTe;

        return $this;
    }

    public function getTotalWithDiscountTe(): ?string
    {
        return $this->totalWithDiscountTe;
    }

    public function setTotalWithDiscountTe(?string $totalWithDiscountTe): self
    {
        $this->totalWithDiscountTe = $totalWithDiscountTe;

        return $this;
    }

    public function getTotalTax(): ?string
    {
        return $this->totalTax;
    }

    public function setTotalTax(?string $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function getTotalTi(): ?string
    {
        return $this->totalTi;
    }

    public function setTotalTi(?string $totalTi): self
    {
        $this->totalTi = $totalTi;

        return $this;
    }

    public function getDiscountRate(): ?string
    {
        return $this->discountRate;
    }

    public function setDiscountRate(?string $discountRate): self
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    public function getDiscountValueTe(): ?string
    {
        return $this->discountValueTe;
    }

    public function setDiscountValueTe(?string $discountValueTe): self
    {
        $this->discountValueTe = $discountValueTe;

        return $this;
    }

    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }

    public function setIsTemplate(?bool $isTemplate): self
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }


}
