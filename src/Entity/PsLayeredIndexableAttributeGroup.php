<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredIndexableAttributeGroup
 *
 * @ORM\Table(name="ps_layered_indexable_attribute_group")
 * @ORM\Entity
 */
class PsLayeredIndexableAttributeGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attribute_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttributeGroup;

    /**
     * @var bool
     *
     * @ORM\Column(name="indexable", type="boolean", nullable=false)
     */
    private $indexable = '0';

    public function getIdAttributeGroup(): ?int
    {
        return $this->idAttributeGroup;
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
