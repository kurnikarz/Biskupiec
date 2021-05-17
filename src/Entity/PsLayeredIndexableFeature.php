<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredIndexableFeature
 *
 * @ORM\Table(name="ps_layered_indexable_feature")
 * @ORM\Entity
 */
class PsLayeredIndexableFeature
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeature;

    /**
     * @var bool
     *
     * @ORM\Column(name="indexable", type="boolean", nullable=false)
     */
    private $indexable = '0';

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
    }

    public function getIndexable(): ?bool
    {
        return $this->indexable;
    }

    public function setIndexable(bool $indexable): self
    {
        $this->indexable = $indexable;

        return $this;
    }


}
