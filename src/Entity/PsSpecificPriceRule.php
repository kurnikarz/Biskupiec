<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSpecificPriceRule
 *
 * @ORM\Table(name="ps_specific_price_rule", indexes={@ORM\Index(name="id_product", columns={"id_shop", "id_currency", "id_country", "id_group", "from_quantity", "from", "to"})})
 * @ORM\Entity
 */
class PsSpecificPriceRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_specific_price_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpecificPriceRule;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="from_quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fromQuantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $price = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $reduction;

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction_tax", type="boolean", nullable=false, options={"default"="1"})
     */
    private $reductionTax = true;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_type", type="string", length=0, nullable=false)
     */
    private $reductionType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from", type="datetime", nullable=false)
     */
    private $from;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to", type="datetime", nullable=false)
     */
    private $to;

    public function getIdSpecificPriceRule(): ?int
    {
        return $this->idSpecificPriceRule;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

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

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function setIdGroup(int $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    public function getFromQuantity(): ?int
    {
        return $this->fromQuantity;
    }

    public function setFromQuantity(int $fromQuantity): self
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
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

    public function getReductionTax(): ?bool
    {
        return $this->reductionTax;
    }

    public function setReductionTax(bool $reductionTax): self
    {
        $this->reductionTax = $reductionTax;

        return $this;
    }

    public function getReductionType(): ?string
    {
        return $this->reductionType;
    }

    public function setReductionType(string $reductionType): self
    {
        $this->reductionType = $reductionType;

        return $this;
    }

    public function getFrom(): ?\DateTimeInterface
    {
        return $this->from;
    }

    public function setFrom(\DateTimeInterface $from): self
    {
        $this->from = $from;

        return $this;
    }

    public function getTo(): ?\DateTimeInterface
    {
        return $this->to;
    }

    public function setTo(\DateTimeInterface $to): self
    {
        $this->to = $to;

        return $this;
    }


}
