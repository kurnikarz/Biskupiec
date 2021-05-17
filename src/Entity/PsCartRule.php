<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRule
 *
 * @ORM\Table(name="ps_cart_rule", indexes={@ORM\Index(name="date_from", columns={"date_from"}), @ORM\Index(name="date_to", columns={"date_to"}), @ORM\Index(name="id_customer_2", columns={"id_customer", "active", "highlight", "date_to"}), @ORM\Index(name="group_restriction", columns={"group_restriction", "active", "date_to"}), @ORM\Index(name="id_customer", columns={"id_customer", "active", "date_to"}), @ORM\Index(name="group_restriction_2", columns={"group_restriction", "active", "highlight", "date_to"})})
 * @ORM\Entity
 */
class PsCartRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCartRule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=false)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=false)
     */
    private $dateTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_per_user", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantityPerUser = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $priority = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="partial_use", type="boolean", nullable=false)
     */
    private $partialUse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=254, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="minimum_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $minimumAmount = '0.000000';

    /**
     * @var bool
     *
     * @ORM\Column(name="minimum_amount_tax", type="boolean", nullable=false)
     */
    private $minimumAmountTax = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="minimum_amount_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $minimumAmountCurrency = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="minimum_amount_shipping", type="boolean", nullable=false)
     */
    private $minimumAmountShipping = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="country_restriction", type="boolean", nullable=false)
     */
    private $countryRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="carrier_restriction", type="boolean", nullable=false)
     */
    private $carrierRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="group_restriction", type="boolean", nullable=false)
     */
    private $groupRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cart_rule_restriction", type="boolean", nullable=false)
     */
    private $cartRuleRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="product_restriction", type="boolean", nullable=false)
     */
    private $productRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="shop_restriction", type="boolean", nullable=false)
     */
    private $shopRestriction = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="free_shipping", type="boolean", nullable=false)
     */
    private $freeShipping = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_percent", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reductionPercent = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_amount", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $reductionAmount = '0.000000';

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false)
     */
    private $reductionTax = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reduction_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $reductionCurrency = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reduction_product", type="integer", nullable=false)
     */
    private $reductionProduct = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_exclude_special", type="boolean", nullable=false)
     */
    private $reductionExcludeSpecial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gift_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $giftProduct = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gift_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $giftProductAttribute = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="highlight", type="boolean", nullable=false)
     */
    private $highlight = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

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

    public function getIdCartRule(): ?int
    {
        return $this->idCartRule;
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

    public function getDateFrom(): ?\DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function setDateFrom(\DateTimeInterface $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateTo(): ?\DateTimeInterface
    {
        return $this->dateTo;
    }

    public function setDateTo(\DateTimeInterface $dateTo): self
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getQuantityPerUser(): ?int
    {
        return $this->quantityPerUser;
    }

    public function setQuantityPerUser(int $quantityPerUser): self
    {
        $this->quantityPerUser = $quantityPerUser;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPartialUse(): ?bool
    {
        return $this->partialUse;
    }

    public function setPartialUse(bool $partialUse): self
    {
        $this->partialUse = $partialUse;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMinimumAmount(): ?string
    {
        return $this->minimumAmount;
    }

    public function setMinimumAmount(string $minimumAmount): self
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    public function getMinimumAmountTax(): ?bool
    {
        return $this->minimumAmountTax;
    }

    public function setMinimumAmountTax(bool $minimumAmountTax): self
    {
        $this->minimumAmountTax = $minimumAmountTax;

        return $this;
    }

    public function getMinimumAmountCurrency(): ?int
    {
        return $this->minimumAmountCurrency;
    }

    public function setMinimumAmountCurrency(int $minimumAmountCurrency): self
    {
        $this->minimumAmountCurrency = $minimumAmountCurrency;

        return $this;
    }

    public function getMinimumAmountShipping(): ?bool
    {
        return $this->minimumAmountShipping;
    }

    public function setMinimumAmountShipping(bool $minimumAmountShipping): self
    {
        $this->minimumAmountShipping = $minimumAmountShipping;

        return $this;
    }

    public function getCountryRestriction(): ?bool
    {
        return $this->countryRestriction;
    }

    public function setCountryRestriction(bool $countryRestriction): self
    {
        $this->countryRestriction = $countryRestriction;

        return $this;
    }

    public function getCarrierRestriction(): ?bool
    {
        return $this->carrierRestriction;
    }

    public function setCarrierRestriction(bool $carrierRestriction): self
    {
        $this->carrierRestriction = $carrierRestriction;

        return $this;
    }

    public function getGroupRestriction(): ?bool
    {
        return $this->groupRestriction;
    }

    public function setGroupRestriction(bool $groupRestriction): self
    {
        $this->groupRestriction = $groupRestriction;

        return $this;
    }

    public function getCartRuleRestriction(): ?bool
    {
        return $this->cartRuleRestriction;
    }

    public function setCartRuleRestriction(bool $cartRuleRestriction): self
    {
        $this->cartRuleRestriction = $cartRuleRestriction;

        return $this;
    }

    public function getProductRestriction(): ?bool
    {
        return $this->productRestriction;
    }

    public function setProductRestriction(bool $productRestriction): self
    {
        $this->productRestriction = $productRestriction;

        return $this;
    }

    public function getShopRestriction(): ?bool
    {
        return $this->shopRestriction;
    }

    public function setShopRestriction(bool $shopRestriction): self
    {
        $this->shopRestriction = $shopRestriction;

        return $this;
    }

    public function getFreeShipping(): ?bool
    {
        return $this->freeShipping;
    }

    public function setFreeShipping(bool $freeShipping): self
    {
        $this->freeShipping = $freeShipping;

        return $this;
    }

    public function getReductionPercent(): ?string
    {
        return $this->reductionPercent;
    }

    public function setReductionPercent(string $reductionPercent): self
    {
        $this->reductionPercent = $reductionPercent;

        return $this;
    }

    public function getReductionAmount(): ?string
    {
        return $this->reductionAmount;
    }

    public function setReductionAmount(string $reductionAmount): self
    {
        $this->reductionAmount = $reductionAmount;

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

    public function getReductionCurrency(): ?int
    {
        return $this->reductionCurrency;
    }

    public function setReductionCurrency(int $reductionCurrency): self
    {
        $this->reductionCurrency = $reductionCurrency;

        return $this;
    }

    public function getReductionProduct(): ?int
    {
        return $this->reductionProduct;
    }

    public function setReductionProduct(int $reductionProduct): self
    {
        $this->reductionProduct = $reductionProduct;

        return $this;
    }

    public function getReductionExcludeSpecial(): ?bool
    {
        return $this->reductionExcludeSpecial;
    }

    public function setReductionExcludeSpecial(bool $reductionExcludeSpecial): self
    {
        $this->reductionExcludeSpecial = $reductionExcludeSpecial;

        return $this;
    }

    public function getGiftProduct(): ?int
    {
        return $this->giftProduct;
    }

    public function setGiftProduct(int $giftProduct): self
    {
        $this->giftProduct = $giftProduct;

        return $this;
    }

    public function getGiftProductAttribute(): ?int
    {
        return $this->giftProductAttribute;
    }

    public function setGiftProductAttribute(int $giftProductAttribute): self
    {
        $this->giftProductAttribute = $giftProductAttribute;

        return $this;
    }

    public function getHighlight(): ?bool
    {
        return $this->highlight;
    }

    public function setHighlight(bool $highlight): self
    {
        $this->highlight = $highlight;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

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
