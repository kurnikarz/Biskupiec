<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsState
 *
 * @ORM\Table(name="ps_state", indexes={@ORM\Index(name="id_zone", columns={"id_zone"}), @ORM\Index(name="id_country", columns={"id_country"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idState;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idZone;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=7, nullable=false)
     */
    private $isoCode;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_behavior", type="smallint", nullable=false)
     */
    private $taxBehavior = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    public function getIdState(): ?int
    {
        return $this->idState;
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

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    public function setIdZone(int $idZone): self
    {
        $this->idZone = $idZone;

        return $this;
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

    public function getTaxBehavior(): ?int
    {
        return $this->taxBehavior;
    }

    public function setTaxBehavior(int $taxBehavior): self
    {
        $this->taxBehavior = $taxBehavior;

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


}
