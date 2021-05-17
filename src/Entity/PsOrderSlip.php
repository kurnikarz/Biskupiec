<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderSlip
 *
 * @ORM\Table(name="ps_order_slip", indexes={@ORM\Index(name="order_slip_customer", columns={"id_customer"}), @ORM\Index(name="id_order", columns={"id_order"})})
 * @ORM\Entity
 */
class PsOrderSlip
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_slip", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderSlip;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_products_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalProductsTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_products_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalProductsTaxIncl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_shipping_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalShippingTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_shipping_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalShippingTaxIncl = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_cost", type="boolean", nullable=false)
     */
    private $shippingCost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $amount = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_cost_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $shippingCostAmount = '0.000000';

    /**
     * @var bool
     *
     * @ORM\Column(name="partial", type="boolean", nullable=false)
     */
    private $partial;

    /**
     * @var bool
     *
     * @ORM\Column(name="order_slip_type", type="boolean", nullable=false)
     */
    private $orderSlipType = '0';

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

    public function getIdOrderSlip(): ?int
    {
        return $this->idOrderSlip;
    }

    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    public function setConversionRate(string $conversionRate): self
    {
        $this->conversionRate = $conversionRate;

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

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getTotalProductsTaxExcl(): ?string
    {
        return $this->totalProductsTaxExcl;
    }

    public function setTotalProductsTaxExcl(?string $totalProductsTaxExcl): self
    {
        $this->totalProductsTaxExcl = $totalProductsTaxExcl;

        return $this;
    }

    public function getTotalProductsTaxIncl(): ?string
    {
        return $this->totalProductsTaxIncl;
    }

    public function setTotalProductsTaxIncl(?string $totalProductsTaxIncl): self
    {
        $this->totalProductsTaxIncl = $totalProductsTaxIncl;

        return $this;
    }

    public function getTotalShippingTaxExcl(): ?string
    {
        return $this->totalShippingTaxExcl;
    }

    public function setTotalShippingTaxExcl(?string $totalShippingTaxExcl): self
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;

        return $this;
    }

    public function getTotalShippingTaxIncl(): ?string
    {
        return $this->totalShippingTaxIncl;
    }

    public function setTotalShippingTaxIncl(?string $totalShippingTaxIncl): self
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;

        return $this;
    }

    public function getShippingCost(): ?bool
    {
        return $this->shippingCost;
    }

    public function setShippingCost(bool $shippingCost): self
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getShippingCostAmount(): ?string
    {
        return $this->shippingCostAmount;
    }

    public function setShippingCostAmount(string $shippingCostAmount): self
    {
        $this->shippingCostAmount = $shippingCostAmount;

        return $this;
    }

    public function getPartial(): ?bool
    {
        return $this->partial;
    }

    public function setPartial(bool $partial): self
    {
        $this->partial = $partial;

        return $this;
    }

    public function getOrderSlipType(): ?bool
    {
        return $this->orderSlipType;
    }

    public function setOrderSlipType(bool $orderSlipType): self
    {
        $this->orderSlipType = $orderSlipType;

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


}
