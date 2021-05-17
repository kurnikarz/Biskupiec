<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductSupplier
 *
 * @ORM\Table(name="ps_product_supplier", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_product_attribute", "id_supplier"})}, indexes={@ORM\Index(name="id_supplier", columns={"id_supplier", "id_product"})})
 * @ORM\Entity
 */
class PsProductSupplier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_supplier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductSupplier;

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
    private $idProductAttribute = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_supplier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSupplier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_supplier_reference", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $productSupplierReference = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="product_supplier_price_te", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $productSupplierPriceTe = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    public function getIdProductSupplier(): ?int
    {
        return $this->idProductSupplier;
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

    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    public function setIdSupplier(int $idSupplier): self
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    public function getProductSupplierReference(): ?string
    {
        return $this->productSupplierReference;
    }

    public function setProductSupplierReference(?string $productSupplierReference): self
    {
        $this->productSupplierReference = $productSupplierReference;

        return $this;
    }

    public function getProductSupplierPriceTe(): ?string
    {
        return $this->productSupplierPriceTe;
    }

    public function setProductSupplierPriceTe(string $productSupplierPriceTe): self
    {
        $this->productSupplierPriceTe = $productSupplierPriceTe;

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


}
