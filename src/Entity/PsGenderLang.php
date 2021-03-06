<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsGenderLang
 *
 * @ORM\Table(name="ps_gender_lang", indexes={@ORM\Index(name="id_gender", columns={"id_gender"})})
 * @ORM\Entity
 */
class PsGenderLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gender", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGender;

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
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    public function getIdGender(): ?int
    {
        return $this->idGender;
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
