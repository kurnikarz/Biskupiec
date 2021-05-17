<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsDelivery
 *
 * @ORM\Table(name="ps_delivery", indexes={@ORM\Index(name="id_range_price", columns={"id_range_price"}), @ORM\Index(name="id_zone", columns={"id_zone"}), @ORM\Index(name="id_range_weight", columns={"id_range_weight"}), @ORM\Index(name="id_carrier", columns={"id_carrier", "id_zone"})})
 * @ORM\Entity
 */
class PsDelivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_delivery", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDelivery;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idShop = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idShopGroup = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_range_price", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idRangePrice = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_range_weight", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idRangeWeight = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idZone;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $price;

    public function getIdDelivery(): ?int
    {
        return $this->idDelivery;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function setIdCarrier(int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getIdRangePrice(): ?int
    {
        return $this->idRangePrice;
    }

    public function setIdRangePrice(?int $idRangePrice): self
    {
        $this->idRangePrice = $idRangePrice;

        return $this;
    }

    public function getIdRangeWeight(): ?int
    {
        return $this->idRangeWeight;
    }

    public function setIdRangeWeight(?int $idRangeWeight): self
    {
        $this->idRangeWeight = $idRangeWeight;

        return $this;
    }

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    public function setIdZone(int $idZone): self
    {
        $this->idZone = $idZone;

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
