<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAlias
 *
 * @ORM\Table(name="ps_alias", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class PsAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_alias", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=191, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="search", type="string", length=255, nullable=false)
     */
    private $search;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    public function getIdAlias(): ?int
    {
        return $this->idAlias;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(string $search): self
    {
        $this->search = $search;

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


}
