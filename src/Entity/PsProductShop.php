<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductShop
 *
 * @ORM\Table(name="ps_product_shop", indexes={@ORM\Index(name="indexed", columns={"indexed", "active", "id_product"}), @ORM\Index(name="date_add", columns={"date_add", "active", "visibility"}), @ORM\Index(name="id_category_default", columns={"id_category_default"})})
 * @ORM\Entity
 */
class PsProductShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_category_default", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCategoryDefault = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idTaxRulesGroup;

    /**
     * @var bool
     *
     * @ORM\Column(name="on_sale", type="boolean", nullable=false)
     */
    private $onSale = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="online_only", type="boolean", nullable=false)
     */
    private $onlineOnly = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="minimal_quantity", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $minimalQuantity = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="low_stock_threshold", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lowStockThreshold = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="low_stock_alert", type="boolean", nullable=false)
     */
    private $lowStockAlert = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $wholesalePrice = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unity", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $unity = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_ratio", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitPriceRatio = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="additional_shipping_cost", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $additionalShippingCost = '0.000000';

    /**
     * @var bool
     *
     * @ORM\Column(name="customizable", type="boolean", nullable=false)
     */
    private $customizable = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="uploadable_files", type="boolean", nullable=false)
     */
    private $uploadableFiles = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="text_fields", type="boolean", nullable=false)
     */
    private $textFields = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_type", type="string", length=0, nullable=false, options={"default"="''"})
     */
    private $redirectType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="id_type_redirected", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idTypeRedirected = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="available_for_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $availableForOrder = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $availableDate = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_condition", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showCondition = true;

    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=0, nullable=false, options={"default"="'new'"})
     */
    private $condition = '\'new\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_price", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showPrice = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="indexed", type="boolean", nullable=false)
     */
    private $indexed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=0, nullable=false, options={"default"="'both'"})
     */
    private $visibility = '\'both\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_default_attribute", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $cacheDefaultAttribute = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="advanced_stock_management", type="boolean", nullable=false)
     */
    private $advancedStockManagement = '0';

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
     * @var int
     *
     * @ORM\Column(name="pack_stock_type", type="integer", nullable=false, options={"default"="3","unsigned"=true})
     */
    private $packStockType = 3;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdCategoryDefault(): ?int
    {
        return $this->idCategoryDefault;
    }

    public function setIdCategoryDefault(?int $idCategoryDefault): self
    {
        $this->idCategoryDefault = $idCategoryDefault;

        return $this;
    }

    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function setIdTaxRulesGroup(int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    public function getOnSale(): ?bool
    {
        return $this->onSale;
    }

    public function setOnSale(bool $onSale): self
    {
        $this->onSale = $onSale;

        return $this;
    }

    public function getOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    public function setOnlineOnly(bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }

    public function getEcotax(): ?string
    {
        return $this->ecotax;
    }

    public function setEcotax(string $ecotax): self
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    public function getMinimalQuantity(): ?int
    {
        return $this->minimalQuantity;
    }

    public function setMinimalQuantity(int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;

        return $this;
    }

    public function getLowStockThreshold(): ?int
    {
        return $this->lowStockThreshold;
    }

    public function setLowStockThreshold(?int $lowStockThreshold): self
    {
        $this->lowStockThreshold = $lowStockThreshold;

        return $this;
    }

    public function getLowStockAlert(): ?bool
    {
        return $this->lowStockAlert;
    }

    public function setLowStockAlert(bool $lowStockAlert): self
    {
        $this->lowStockAlert = $lowStockAlert;

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

    public function getWholesalePrice(): ?string
    {
        return $this->wholesalePrice;
    }

    public function setWholesalePrice(string $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;

        return $this;
    }

    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(?string $unity): self
    {
        $this->unity = $unity;

        return $this;
    }

    public function getUnitPriceRatio(): ?string
    {
        return $this->unitPriceRatio;
    }

    public function setUnitPriceRatio(string $unitPriceRatio): self
    {
        $this->unitPriceRatio = $unitPriceRatio;

        return $this;
    }

    public function getAdditionalShippingCost(): ?string
    {
        return $this->additionalShippingCost;
    }

    public function setAdditionalShippingCost(string $additionalShippingCost): self
    {
        $this->additionalShippingCost = $additionalShippingCost;

        return $this;
    }

    public function getCustomizable(): ?bool
    {
        return $this->customizable;
    }

    public function setCustomizable(bool $customizable): self
    {
        $this->customizable = $customizable;

        return $this;
    }

    public function getUploadableFiles(): ?bool
    {
        return $this->uploadableFiles;
    }

    public function setUploadableFiles(bool $uploadableFiles): self
    {
        $this->uploadableFiles = $uploadableFiles;

        return $this;
    }

    public function getTextFields(): ?bool
    {
        return $this->textFields;
    }

    public function setTextFields(bool $textFields): self
    {
        $this->textFields = $textFields;

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

    public function getRedirectType(): ?string
    {
        return $this->redirectType;
    }

    public function setRedirectType(string $redirectType): self
    {
        $this->redirectType = $redirectType;

        return $this;
    }

    public function getIdTypeRedirected(): ?int
    {
        return $this->idTypeRedirected;
    }

    public function setIdTypeRedirected(int $idTypeRedirected): self
    {
        $this->idTypeRedirected = $idTypeRedirected;

        return $this;
    }

    public function getAvailableForOrder(): ?bool
    {
        return $this->availableForOrder;
    }

    public function setAvailableForOrder(bool $availableForOrder): self
    {
        $this->availableForOrder = $availableForOrder;

        return $this;
    }

    public function getAvailableDate(): ?\DateTimeInterface
    {
        return $this->availableDate;
    }

    public function setAvailableDate(?\DateTimeInterface $availableDate): self
    {
        $this->availableDate = $availableDate;

        return $this;
    }

    public function getShowCondition(): ?bool
    {
        return $this->showCondition;
    }

    public function setShowCondition(bool $showCondition): self
    {
        $this->showCondition = $showCondition;

        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function getShowPrice(): ?bool
    {
        return $this->showPrice;
    }

    public function setShowPrice(bool $showPrice): self
    {
        $this->showPrice = $showPrice;

        return $this;
    }

    public function getIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(bool $indexed): self
    {
        $this->indexed = $indexed;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getCacheDefaultAttribute(): ?int
    {
        return $this->cacheDefaultAttribute;
    }

    public function setCacheDefaultAttribute(?int $cacheDefaultAttribute): self
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;

        return $this;
    }

    public function getAdvancedStockManagement(): ?bool
    {
        return $this->advancedStockManagement;
    }

    public function setAdvancedStockManagement(bool $advancedStockManagement): self
    {
        $this->advancedStockManagement = $advancedStockManagement;

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

    public function getPackStockType(): ?int
    {
        return $this->packStockType;
    }

    public function setPackStockType(int $packStockType): self
    {
        $this->packStockType = $packStockType;

        return $this;
    }


}
