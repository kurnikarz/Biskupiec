<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsZoneShop
 *
 * @ORM\Table(name="ps_zone_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsZoneShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idZone;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
