<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsRisk
 *
 * @ORM\Table(name="ps_risk")
 * @ORM\Entity
 */
class PsRisk
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_risk", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRisk;

    /**
     * @var bool
     *
     * @ORM\Column(name="percent", type="boolean", nullable=false)
     */
    private $percent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $color = 'NULL';

    public function getIdRisk(): ?int
    {
        return $this->idRisk;
    }

    public function getPercent(): ?bool
    {
        return $this->percent;
    }

    public function setPercent(bool $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }


}
