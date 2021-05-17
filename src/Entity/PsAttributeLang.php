<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAttributeLang
 *
 * @ORM\Table(name="ps_attribute_lang", indexes={@ORM\Index(name="IDX_3ABE46A7BA299860", columns={"id_lang"}), @ORM\Index(name="IDX_3ABE46A77A4F53DC", columns={"id_attribute"})})
 * @ORM\Entity
 */
class PsAttributeLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttribute;

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

    public function getIdAttribute(): ?int
    {
        return $this->idAttribute;
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
