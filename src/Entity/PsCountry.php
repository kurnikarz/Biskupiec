<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCountry
 *
 * @ORM\Table(name="ps_country", indexes={@ORM\Index(name="country_iso_code", columns={"iso_code"}), @ORM\Index(name="country_", columns={"id_zone"})})
 * @ORM\Entity
 */
class PsCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idZone;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=3, nullable=false)
     */
    private $isoCode;

    /**
     * @var int
     *
     * @ORM\Column(name="call_prefix", type="integer", nullable=false)
     */
    private $callPrefix = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="contains_states", type="boolean", nullable=false)
     */
    private $containsStates = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="need_identification_number", type="boolean", nullable=false)
     */
    private $needIdentificationNumber = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="need_zip_code", type="boolean", nullable=false, options={"default"="1"})
     */
    private $needZipCode = true;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code_format", type="string", length=12, nullable=false, options={"default"="''"})
     */
    private $zipCodeFormat = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="display_tax_label", type="boolean", nullable=false)
     */
    private $displayTaxLabel;

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
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

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

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

    public function getCallPrefix(): ?int
    {
        return $this->callPrefix;
    }

    public function setCallPrefix(int $callPrefix): self
    {
        $this->callPrefix = $callPrefix;

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

    public function getContainsStates(): ?bool
    {
        return $this->containsStates;
    }

    public function setContainsStates(bool $containsStates): self
    {
        $this->containsStates = $containsStates;

        return $this;
    }

    public function getNeedIdentificationNumber(): ?bool
    {
        return $this->needIdentificationNumber;
    }

    public function setNeedIdentificationNumber(bool $needIdentificationNumber): self
    {
        $this->needIdentificationNumber = $needIdentificationNumber;

        return $this;
    }

    public function getNeedZipCode(): ?bool
    {
        return $this->needZipCode;
    }

    public function setNeedZipCode(bool $needZipCode): self
    {
        $this->needZipCode = $needZipCode;

        return $this;
    }

    public function getZipCodeFormat(): ?string
    {
        return $this->zipCodeFormat;
    }

    public function setZipCodeFormat(string $zipCodeFormat): self
    {
        $this->zipCodeFormat = $zipCodeFormat;

        return $this;
    }

    public function getDisplayTaxLabel(): ?bool
    {
        return $this->displayTaxLabel;
    }

    public function setDisplayTaxLabel(bool $displayTaxLabel): self
    {
        $this->displayTaxLabel = $displayTaxLabel;

        return $this;
    }


}
