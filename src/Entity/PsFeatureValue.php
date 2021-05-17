<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeatureValue
 *
 * @ORM\Table(name="ps_feature_value", indexes={@ORM\Index(name="feature", columns={"id_feature"})})
 * @ORM\Entity
 */
class PsFeatureValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeatureValue;

    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idFeature;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="custom", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $custom = 'NULL';

    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
    }

    public function setIdFeature(int $idFeature): self
    {
        $this->idFeature = $idFeature;

        return $this;
    }

    public function getCustom(): ?bool
    {
        return $this->custom;
    }

    public function setCustom(?bool $custom): self
    {
        $this->custom = $custom;

        return $this;
    }


}
