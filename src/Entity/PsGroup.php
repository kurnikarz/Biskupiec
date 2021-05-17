<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsGroup
 *
 * @ORM\Table(name="ps_group")
 * @ORM\Entity
 */
class PsGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $reduction = '0.00';

    /**
     * @var bool
     *
     * @ORM\Column(name="price_display_method", type="boolean", nullable=false)
     */
    private $priceDisplayMethod = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_prices", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showPrices = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getPriceDisplayMethod(): ?bool
    {
        return $this->priceDisplayMethod;
    }

    public function setPriceDisplayMethod(bool $priceDisplayMethod): self
    {
        $this->priceDisplayMethod = $priceDisplayMethod;

        return $this;
    }

    public function getShowPrices(): ?bool
    {
        return $this->showPrices;
    }

    public function setShowPrices(bool $showPrices): self
    {
        $this->showPrices = $showPrices;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
