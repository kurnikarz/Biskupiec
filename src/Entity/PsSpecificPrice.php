<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSpecificPrice
 *
 * @ORM\Table(name="ps_specific_price", uniqueConstraints={@ORM\UniqueConstraint(name="id_product_2", columns={"id_product", "id_product_attribute", "id_customer", "id_cart", "from", "to", "id_shop", "id_shop_group", "id_currency", "id_country", "id_group", "from_quantity", "id_specific_price_rule"})}, indexes={@ORM\Index(name="from", columns={"from"}), @ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="from_quantity", columns={"from_quantity"}), @ORM\Index(name="id_product", columns={"id_product", "id_shop", "id_currency", "id_country", "id_group", "id_customer", "from_quantity", "from", "to"}), @ORM\Index(name="to", columns={"to"}), @ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="id_specific_price_rule", columns={"id_specific_price_rule"}), @ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_cart", columns={"id_cart"})})
 * @ORM\Entity
 */
class PsSpecificPrice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSpecificPriceRule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCart;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShopGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="from_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fromQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $reduction;

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false, options={"default"="1"})
     */
    private $reductionTax = true;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_type", type="string", length=0, nullable=false)
     */
    private $reductionType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from", type="datetime", nullable=false)
     */
    private $from;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to", type="datetime", nullable=false)
     */
    private $to;

    public function getIdSpecificPrice(): ?int
    {
        return $this->idSpecificPrice;
    }

    public function getIdSpecificPriceRule(): ?int
    {
        return $this->idSpecificPriceRule;
    }

    public function setIdSpecificPriceRule(int $idSpecificPriceRule): self
    {
        $this->idSpecificPriceRule = $idSpecificPriceRule;

        return $this;
    }

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function setIdCart(int $idCart): self
    {
        $this->idCart = $idCart;

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

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

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

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function setIdGroup(int $idGroup): self
    {
        $this->idGroup = $idGroup;

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

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    public function setIdProductAttribute(int $idProductAttribute): self
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFromQuantity(): ?int
    {
        return $this->fromQuantity;
    }

    public function setFromQuantity(int $fromQuantity): self
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getReductionTax(): ?bool
    {
        return $this->reductionTax;
    }

    public function setReductionTax(bool $reductionTax): self
    {
        $this->reductionTax = $reductionTax;

        return $this;
    }

    public function getReductionType(): ?string
    {
        return $this->reductionType;
    }

    public function setReductionType(string $reductionType): self
    {
        $this->reductionType = $reductionType;

        return $this;
    }

    public function getFrom(): ?\DateTimeInterface
    {
        return $this->from;
    }

    public function setFrom(\DateTimeInterface $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?\DateTimeInterface
    {
        return $this->to;
    }

    public function setTo(\DateTimeInterface $to): self
    {
        $this->to = $to;

        return $this;
    }


}
