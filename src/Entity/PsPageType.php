<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPageType
 *
 * @ORM\Table(name="ps_page_type", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsPageType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_page_type", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPageType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getIdPageType(): ?int
    {
        return $this->idPageType;
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
