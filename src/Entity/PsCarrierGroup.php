<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCarrierGroup
 *
 * @ORM\Table(name="ps_carrier_group")
 * @ORM\Entity
 */
class PsCarrierGroup
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
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }


}
