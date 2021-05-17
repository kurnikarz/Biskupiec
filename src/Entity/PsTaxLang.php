<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTaxLang
 *
 * @ORM\Table(name="ps_tax_lang")
 * @ORM\Entity
 */
class PsTaxLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTax;

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

    public function getIdTax(): ?int
    {
        return $this->idTax;
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
