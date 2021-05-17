<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomization
 *
 * @ORM\Table(name="ps_customization", indexes={@ORM\Index(name="id_product_attribute", columns={"id_product_attribute"}), @ORM\Index(name="id_cart_product", columns={"id_cart", "id_product", "id_product_attribute"})})
 * @ORM\Entity
 */
class PsCustomization
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customization", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomization;

    /**
     * @var int
     *
     * @ORM\Column(name="id_address_delivery", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAddressDelivery = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCart;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_refunded", type="integer", nullable=false)
     */
    private $quantityRefunded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_returned", type="integer", nullable=false)
     */
    private $quantityReturned = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="in_cart", type="boolean", nullable=false)
     */
    private $inCart = '0';

    public function getIdCustomization(): ?int
    {
        return $this->idCustomization;
    }

    public function getIdAddressDelivery(): ?int
    {
        return $this->idAddressDelivery;
    }

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getQuantityRefunded(): ?int
    {
        return $this->quantityRefunded;
    }

    public function setQuantityRefunded(int $quantityRefunded): self
    {
        $this->quantityRefunded = $quantityRefunded;

        return $this;
    }

    public function getQuantityReturned(): ?int
    {
        return $this->quantityReturned;
    }

    public function setQuantityReturned(int $quantityReturned): self
    {
        $this->quantityReturned = $quantityReturned;

        return $this;
    }

    public function getInCart(): ?bool
    {
        return $this->inCart;
    }

    public function setInCart(bool $inCart): self
    {
        $this->inCart = $inCart;

        return $this;
    }


}
