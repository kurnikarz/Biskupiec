<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsGender
 *
 * @ORM\Table(name="ps_gender")
 * @ORM\Entity
 */
class PsGender
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gender", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGender;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    public function getIdGender(): ?int
    {
        return $this->idGender;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }


}
