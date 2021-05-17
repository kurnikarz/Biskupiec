<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredFilter
 *
 * @ORM\Table(name="ps_layered_filter")
 * @ORM\Entity
 */
class PsLayeredFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_layered_filter", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLayeredFilter;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filters", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $filters = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="n_categories", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $nCategories;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdLayeredFilter(): ?int
    {
        return $this->idLayeredFilter;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFilters(): ?string
    {
        return $this->filters;
    }

    public function setFilters(?string $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    public function getNCategories(): ?int
    {
        return $this->nCategories;
    }

    public function setNCategories(int $nCategories): self
    {
        $this->nCategories = $nCategories;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }


}
