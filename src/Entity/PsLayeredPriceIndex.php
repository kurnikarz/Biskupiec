<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredPriceIndex
 *
 * @ORM\Table(name="ps_layered_price_index", indexes={@ORM\Index(name="price_max", columns={"price_max"}), @ORM\Index(name="id_currency", columns={"id_currency"}), @ORM\Index(name="price_min", columns={"price_min"})})
 * @ORM\Entity
 */
class PsLayeredPriceIndex
{
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
     * @ORM\Column(name="id_currency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="price_min", type="decimal", precision=11, scale=5, nullable=false)
     */
    private $priceMin;

    /**
     * @var string
     *
     * @ORM\Column(name="price_max", type="decimal", precision=11, scale=5, nullable=false)
     */
    private $priceMax;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function getPriceMin(): ?string
    {
        return $this->priceMin;
    }

    public function setPriceMin(string $priceMin): self
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    public function getPriceMax(): ?string
    {
        return $this->priceMax;
    }

    public function setPriceMax(string $priceMax): self
    {
        $this->priceMax = $priceMax;

        return $this;
    }


}
