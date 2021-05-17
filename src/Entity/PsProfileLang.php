<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProfileLang
 *
 * @ORM\Table(name="ps_profile_lang")
 * @ORM\Entity
 */
class PsProfileLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getIdProfile(): ?int
    {
        return $this->idProfile;
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
