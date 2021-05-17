<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsHookModule
 *
 * @ORM\Table(name="ps_hook_module", indexes={@ORM\Index(name="id_hook", columns={"id_hook"}), @ORM\Index(name="id_module", columns={"id_module"}), @ORM\Index(name="position", columns={"id_shop", "position"})})
 * @ORM\Entity
 */
class PsHookModule
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
     * @ORM\Column(name="id_hook", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHook;

    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false)
     */
    private $position;

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdHook(): ?int
    {
        return $this->idHook;
    }

    public function getPosition(): ?bool
    {
        return $this->position;
    }

    public function setPosition(bool $position): self
    {
        $this->position = $position;

        return $this;
    }


}
