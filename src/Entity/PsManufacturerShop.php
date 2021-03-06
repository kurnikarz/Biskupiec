<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsManufacturerShop
 *
 * @ORM\Table(name="ps_manufacturer_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsManufacturerShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_manufacturer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idManufacturer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdManufacturer(): ?int
    {
        return $this->idManufacturer;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
