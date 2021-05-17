<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrderDetail
 *
 * @ORM\Table(name="ps_supply_order_detail", indexes={@ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_product_product_attribute", columns={"id_product", "id_product_attribute"}), @ORM\Index(name="id_supply_order", columns={"id_supply_order", "id_product"})})
 * @ORM\Entity
 */
class PsSupplyOrderDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_detail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplyOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_reference", type="string", length=64, nullable=false)
     */
    private $supplierReference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ean13", type="string", length=13, nullable=true, options={"default"="NULL"})
     */
    private $ean13 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="isbn", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $isbn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $upc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mpn", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $mpn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exchange_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $exchangeRate = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $unitPriceTe = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_expected", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityExpected;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_received", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityReceived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';

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
     * @var string|null
     *
     * @ORM\Column(name="price_with_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceWithDiscountTe = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxRate = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_value", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxValue = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_ti", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTi = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_value_with_order_discount", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $taxValueWithOrderDiscount = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_with_order_discount_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceWithOrderDiscountTe = '0.000000';

    public function getIdSupplyOrderDetail(): ?int
    {
        return $this->idSupplyOrderDetail;
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

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    public function setIdProductAttribute(int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;

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

    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    public function setSupplierReference(string $supplierReference): self
    {
        $this->supplierReference = $supplierReference;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(?string $mpn): self
    {
        $this->mpn = $mpn;

        return $this;
    }

    public function getExchangeRate(): ?string
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(?string $exchangeRate): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    public function getUnitPriceTe(): ?string
    {
        return $this->unitPriceTe;
    }

    public function setUnitPriceTe(?string $unitPriceTe): self
    {
        $this->unitPriceTe = $unitPriceTe;

        return $this;
    }

    public function getQuantityExpected(): ?int
    {
        return $this->quantityExpected;
    }

    public function setQuantityExpected(int $quantityExpected): self
    {
        $this->quantityExpected = $quantityExpected;

        return $this;
    }

    public function getQuantityReceived(): ?int
    {
        return $this->quantityReceived;
    }

    public function setQuantityReceived(int $quantityReceived): self
    {
        $this->quantityReceived = $quantityReceived;

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

    public function getPriceWithDiscountTe(): ?string
    {
        return $this->priceWithDiscountTe;
    }

    public function setPriceWithDiscountTe(?string $priceWithDiscountTe): self
    {
        $this->priceWithDiscountTe = $priceWithDiscountTe;

        return $this;
    }

    public function getTaxRate(): ?string
    {
        return $this->taxRate;
    }

    public function setTaxRate(?string $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function getTaxValue(): ?string
    {
        return $this->taxValue;
    }

    public function setTaxValue(?string $taxValue): self
    {
        $this->taxValue = $taxValue;

        return $this;
    }

    public function getPriceTi(): ?string
    {
        return $this->priceTi;
    }

    public function setPriceTi(?string $priceTi): self
    {
        $this->priceTi = $priceTi;

        return $this;
    }

    public function getTaxValueWithOrderDiscount(): ?string
    {
        return $this->taxValueWithOrderDiscount;
    }

    public function setTaxValueWithOrderDiscount(?string $taxValueWithOrderDiscount): self
    {
        $this->taxValueWithOrderDiscount = $taxValueWithOrderDiscount;

        return $this;
    }

    public function getPriceWithOrderDiscountTe(): ?string
    {
        return $this->priceWithOrderDiscountTe;
    }

    public function setPriceWithOrderDiscountTe(?string $priceWithOrderDiscountTe): self
    {
        $this->priceWithOrderDiscountTe = $priceWithOrderDiscountTe;

        return $this;
    }


}
