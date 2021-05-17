<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCarrierZone
 *
 * @ORM\Table(name="ps_carrier_zone")
 * @ORM\Entity
 */
class PsCarrierZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_zone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idZone;

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function getIdZone(): ?int
    {
        return $this->idZone;
    }


}
