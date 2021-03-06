<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredProductAttribute
 *
 * @ORM\Table(name="ps_layered_product_attribute", uniqueConstraints={@ORM\UniqueConstraint(name="id_attribute_group", columns={"id_attribute_group", "id_attribute", "id_product", "id_shop"})})
 * @ORM\Entity
 */
class PsLayeredProductAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttribute;

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
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAttributeGroup = '0';

    public function getIdAttribute(): ?int
    {
        return $this->idAttribute;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdAttributeGroup(): ?int
    {
        return $this->idAttributeGroup;
    }

    public function setIdAttributeGroup(int $idAttributeGroup): self
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }


}
