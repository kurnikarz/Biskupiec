<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsHookModuleExceptions
 *
 * @ORM\Table(name="ps_hook_module_exceptions", indexes={@ORM\Index(name="id_module", columns={"id_module"}), @ORM\Index(name="id_hook", columns={"id_hook"})})
 * @ORM\Entity
 */
class PsHookModuleExceptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hook_module_exceptions", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHookModuleExceptions;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_hook", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idHook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fileName = 'NULL';

    public function getIdHookModuleExceptions(): ?int
    {
        return $this->idHookModuleExceptions;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getIdHook(): ?int
    {
        return $this->idHook;
    }

    public function setIdHook(int $idHook): self
    {
        $this->idHook = $idHook;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }


}
