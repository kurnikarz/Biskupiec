<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsStock
 *
 * @ORM\Table(name="ps_stock", indexes={@ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsStock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStock;

    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;

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
     * @var int
     *
     * @ORM\Column(name="physical_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $physicalQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="usable_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $usableQuantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_te", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $priceTe = '0.000000';

    public function getIdStock(): ?int
    {
        return $this->idStock;
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

    public function getPhysicalQuantity(): ?int
    {
        return $this->physicalQuantity;
    }

    public function setPhysicalQuantity(int $physicalQuantity): self
    {
        $this->physicalQuantity = $physicalQuantity;

        return $this;
    }

    public function getUsableQuantity(): ?int
    {
        return $this->usableQuantity;
    }

    public function setUsableQuantity(int $usableQuantity): self
    {
        $this->usableQuantity = $usableQuantity;

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


}
