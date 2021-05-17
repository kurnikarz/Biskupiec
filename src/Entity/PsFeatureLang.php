<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeatureLang
 *
 * @ORM\Table(name="ps_feature_lang", indexes={@ORM\Index(name="id_lang", columns={"id_lang", "name"})})
 * @ORM\Entity
 */
class PsFeatureLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeature;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
