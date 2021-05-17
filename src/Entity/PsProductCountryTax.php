<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCountryTax
 *
 * @ORM\Table(name="ps_product_country_tax")
 * @ORM\Entity
 */
class PsProductCountryTax
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
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     */
    private $idTax;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function getIdTax(): ?int
    {
        return $this->idTax;
    }

    public function setIdTax(int $idTax): self
    {
        $this->idTax = $idTax;

        return $this;
    }


}
