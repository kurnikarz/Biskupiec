<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsBadge
 *
 * @ORM\Table(name="ps_badge")
 * @ORM\Entity
 */
class PsBadge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_badge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBadge;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_badge", type="integer", nullable=false)
     */
    private $idPsBadge;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false)
     */
    private $idGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="group_position", type="integer", nullable=false)
     */
    private $groupPosition;

    /**
     * @var int
     *
     * @ORM\Column(name="scoring", type="integer", nullable=false)
     */
    private $scoring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="awb", type="integer", nullable=true)
     */
    private $awb = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';

    public function getIdBadge(): ?int
    {
        return $this->idBadge;
    }

    public function getIdPsBadge(): ?int
    {
        return $this->idPsBadge;
    }

    public function setIdPsBadge(int $idPsBadge): self
    {
        $this->idPsBadge = $idPsBadge;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function setIdGroup(int $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    public function getGroupPosition(): ?int
    {
        return $this->groupPosition;
    }

    public function setGroupPosition(int $groupPosition): self
    {
        $this->groupPosition = $groupPosition;

        return $this;
    }

    public function getScoring(): ?int
    {
        return $this->scoring;
    }

    public function setScoring(int $scoring): self
    {
        $this->scoring = $scoring;

        return $this;
    }

    public function getAwb(): ?int
    {
        return $this->awb;
    }

    public function setAwb(?int $awb): self
    {
        $this->awb = $awb;

        return $this;
    }

    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

        return $this;
    }


}
