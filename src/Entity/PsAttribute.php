<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAttribute
 *
 * @ORM\Table(name="ps_attribute", indexes={@ORM\Index(name="attribute_group", columns={"id_attribute_group"})})
 * @ORM\Entity
 */
class PsAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttribute;

    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     */
    private $idAttributeGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=false)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    public function getIdAttribute(): ?int
    {
        return $this->idAttribute;
    }

    public function getIdAttributeGroup(): ?int
    {
        return $this->idAttributeGroup;
    }

    public function setIdAttributeGroup(int $idAttributeGroup): self
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }


}
