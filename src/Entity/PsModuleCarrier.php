<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsModuleCarrier
 *
 * @ORM\Table(name="ps_module_carrier")
 * @ORM\Entity
 */
class PsModuleCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idReference;

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdReference(): ?int
    {
        return $this->idReference;
    }


}
