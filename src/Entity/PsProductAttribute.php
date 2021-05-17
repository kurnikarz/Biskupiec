<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductAttribute
 *
 * @ORM\Table(name="ps_product_attribute", uniqueConstraints={@ORM\UniqueConstraint(name="product_default", columns={"id_product", "default_on"})}, indexes={@ORM\Index(name="id_product_id_product_attribute", columns={"id_product_attribute", "id_product"}), @ORM\Index(name="product_attribute_product", columns={"id_product"}), @ORM\Index(name="reference", columns={"reference"}), @ORM\Index(name="supplier_reference", columns={"supplier_reference"})})
 * @ORM\Entity
 */
class PsProductAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductAttribute;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $reference = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_reference", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $supplierReference = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $location = 'NULL';

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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

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

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    public function setSupplierReference(?string $supplierReference): self
    {
        $this->supplierReference = $supplierReference;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

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
