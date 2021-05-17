<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAttributeGroupLang
 *
 * @ORM\Table(name="ps_attribute_group_lang", indexes={@ORM\Index(name="IDX_4653726CBA299860", columns={"id_lang"}), @ORM\Index(name="IDX_4653726C67A664FB", columns={"id_attribute_group"})})
 * @ORM\Entity
 */
class PsAttributeGroupLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttributeGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="public_name", type="string", length=64, nullable=false)
     */
    private $publicName;

    public function getIdAttributeGroup(): ?int
    {
        return $this->idAttributeGroup;
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

    public function getPublicName(): ?string
    {
        return $this->publicName;
    }

    public function setPublicName(string $publicName): self
    {
        $this->publicName = $publicName;

        return $this;
    }


}
