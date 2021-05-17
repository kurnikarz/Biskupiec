<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAttributeImpact
 *
 * @ORM\Table(name="ps_attribute_impact", uniqueConstraints={@ORM\UniqueConstraint(name="id_product", columns={"id_product", "id_attribute"})})
 * @ORM\Entity
 */
class PsAttributeImpact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_impact", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttributeImpact;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;

    public function getIdAttributeImpact(): ?int
    {
        return $this->idAttributeImpact;
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

    public function getIdAttribute(): ?int
    {
        return $this->idAttribute;
    }

    public function setIdAttribute(int $idAttribute): self
    {
        $this->idAttribute = $idAttribute;

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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }


}
