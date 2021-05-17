<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsQuickAccessLang
 *
 * @ORM\Table(name="ps_quick_access_lang")
 * @ORM\Entity
 */
class PsQuickAccessLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_quick_access", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idQuickAccess;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    public function getIdQuickAccess(): ?int
    {
        return $this->idQuickAccess;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
