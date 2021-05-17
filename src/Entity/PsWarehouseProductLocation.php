<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsWarehouseProductLocation
 *
 * @ORM\Table(name="ps_warehouse_product_location", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_product_attribute", "id_warehouse"})})
 * @ORM\Entity
 */
class PsWarehouseProductLocation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse_product_location", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWarehouseProductLocation;

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
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $location = 'NULL';

    public function getIdWarehouseProductLocation(): ?int
    {
        return $this->idWarehouseProductLocation;
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

    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
    }

    public function setIdWarehouse(int $idWarehouse): self
    {
        $this->idWarehouse = $idWarehouse;

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


}
