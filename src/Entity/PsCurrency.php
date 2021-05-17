<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCurrency
 *
 * @ORM\Table(name="ps_currency", indexes={@ORM\Index(name="currency_iso_code", columns={"iso_code"})})
 * @ORM\Entity
 */
class PsCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false, options={"default"="'0'"})
     */
    private $isoCode = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeric_iso_code", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $numericIsoCode = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="precision", type="integer", nullable=false, options={"default"="6"})
     */
    private $precision = 6;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false)
     */
    private $conversionRate;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="unofficial", type="boolean", nullable=false)
     */
    private $unofficial = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="modified", type="boolean", nullable=false)
     */
    private $modified = '0';

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
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

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    public function getNumericIsoCode(): ?string
    {
        return $this->numericIsoCode;
    }

    public function setNumericIsoCode(?string $numericIsoCode): self
    {
        $this->numericIsoCode = $numericIsoCode;

        return $this;
    }

    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    public function setPrecision(int $precision): self
    {
        $this->precision = $precision;

        return $this;
    }

    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    public function setConversionRate(string $conversionRate): self
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getUnofficial(): ?bool
    {
        return $this->unofficial;
    }

    public function setUnofficial(bool $unofficial): self
    {
        $this->unofficial = $unofficial;

        return $this;
    }

    public function getModified(): ?bool
    {
        return $this->modified;
    }

    public function setModified(bool $modified): self
    {
        $this->modified = $modified;

        return $this;
    }


}
