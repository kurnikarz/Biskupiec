<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTax
 *
 * @ORM\Table(name="ps_tax")
 * @ORM\Entity
 */
class PsTax
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTax;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $rate;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    public function getIdTax(): ?int
    {
        return $this->idTax;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(string $rate): self
    {
        $this->rate = $rate;

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

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }


}
