<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCms
 *
 * @ORM\Table(name="ps_cms")
 * @ORM\Entity
 */
class PsCms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCms;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCmsCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="indexation", type="boolean", nullable=false, options={"default"="1"})
     */
    private $indexation = true;

    public function getIdCms(): ?int
    {
        return $this->idCms;
    }

    public function getIdCmsCategory(): ?int
    {
        return $this->idCmsCategory;
    }

    public function setIdCmsCategory(int $idCmsCategory): self
    {
        $this->idCmsCategory = $idCmsCategory;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIndexation(): ?bool
    {
        return $this->indexation;
    }

    public function setIndexation(bool $indexation): self
    {
        $this->indexation = $indexation;

        return $this;
    }


}
