<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsModuleShop
 *
 * @ORM\Table(name="ps_module_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsModuleShop
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
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var bool
     *
     * @ORM\Column(name="enable_device", type="boolean", nullable=false, options={"default"="7"})
     */
    private $enableDevice = '7';

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getEnableDevice(): ?bool
    {
        return $this->enableDevice;
    }

    public function setEnableDevice(bool $enableDevice): self
    {
        $this->enableDevice = $enableDevice;

        return $this;
    }


}
