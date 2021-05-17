<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeature
 *
 * @ORM\Table(name="ps_feature")
 * @ORM\Entity
 */
class PsFeature
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeature;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
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
