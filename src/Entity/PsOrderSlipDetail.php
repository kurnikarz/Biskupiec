<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderSlipDetail
 *
 * @ORM\Table(name="ps_order_slip_detail")
 * @ORM\Entity
 */
class PsOrderSlipDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_slip", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderSlip;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $productQuantity = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $unitPriceTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $unitPriceTaxIncl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalPriceTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_price_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $totalPriceTaxIncl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $amountTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="amount_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $amountTaxIncl = 'NULL';

    public function getIdOrderSlip(): ?int
    {
        return $this->idOrderSlip;
    }

    public function getIdOrderDetail(): ?int
    {
        return $this->idOrderDetail;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getUnitPriceTaxExcl(): ?string
    {
        return $this->unitPriceTaxExcl;
    }

    public function setUnitPriceTaxExcl(?string $unitPriceTaxExcl): self
    {
        $this->unitPriceTaxExcl = $unitPriceTaxExcl;

        return $this;
    }

    public function getUnitPriceTaxIncl(): ?string
    {
        return $this->unitPriceTaxIncl;
    }

    public function setUnitPriceTaxIncl(?string $unitPriceTaxIncl): self
    {
        $this->unitPriceTaxIncl = $unitPriceTaxIncl;

        return $this;
    }

    public function getTotalPriceTaxExcl(): ?string
    {
        return $this->totalPriceTaxExcl;
    }

    public function setTotalPriceTaxExcl(?string $totalPriceTaxExcl): self
    {
        $this->totalPriceTaxExcl = $totalPriceTaxExcl;

        return $this;
    }

    public function getTotalPriceTaxIncl(): ?string
    {
        return $this->totalPriceTaxIncl;
    }

    public function setTotalPriceTaxIncl(?string $totalPriceTaxIncl): self
    {
        $this->totalPriceTaxIncl = $totalPriceTaxIncl;

        return $this;
    }

    public function getAmountTaxExcl(): ?string
    {
        return $this->amountTaxExcl;
    }

    public function setAmountTaxExcl(?string $amountTaxExcl): self
    {
        $this->amountTaxExcl = $amountTaxExcl;

        return $this;
    }

    public function getAmountTaxIncl(): ?string
    {
        return $this->amountTaxIncl;
    }

    public function setAmountTaxIncl(?string $amountTaxIncl): self
    {
        $this->amountTaxIncl = $amountTaxIncl;

        return $this;
    }


}
