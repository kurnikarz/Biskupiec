<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductAttributeShop
 *
 * @ORM\Table(name="ps_product_attribute_shop", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_shop", "default_on"})})
 * @ORM\Entity
 */
class PsProductAttributeShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductAttribute;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $wholesalePrice = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="ecotax", type="decimal", precision=17, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $ecotax = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $weight = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_impact", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitPriceImpact = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_on", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $defaultOn = 'NULL';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $availableDate = 'NULL';

    public function getIdProductAttribute(): ?int
    {
        return $this->idProductAttribute;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
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

    public function getWholesalePrice(): ?string
    {
        return $this->wholesalePrice;
    }

    public function setWholesalePrice(string $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;

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

    public function getEcotax(): ?string
    {
        return $this->ecotax;
    }

    public function setEcotax(string $ecotax): self
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getUnitPriceImpact(): ?string
    {
        return $this->unitPriceImpact;
    }

    public function setUnitPriceImpact(string $unitPriceImpact): self
    {
        $this->unitPriceImpact = $unitPriceImpact;

        return $this;
    }

    public function getDefaultOn(): ?bool
    {
        return $this->defaultOn;
    }

    public function setDefaultOn(?bool $defaultOn): self
    {
        $this->defaultOn = $defaultOn;

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

    public function getAvailableDate(): ?\DateTimeInterface
    {
        return $this->availableDate;
    }

    public function setAvailableDate(?\DateTimeInterface $availableDate): self
    {
        $this->availableDate = $availableDate;

        return $this;
    }


}
