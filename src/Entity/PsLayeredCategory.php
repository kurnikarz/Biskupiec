<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredCategory
 *
 * @ORM\Table(name="ps_layered_category", indexes={@ORM\Index(name="id_category", columns={"id_category", "type"}), @ORM\Index(name="id_category_shop", columns={"id_category", "id_shop", "type", "id_value", "position"})})
 * @ORM\Entity
 */
class PsLayeredCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_layered_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLayeredCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_value", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="filter_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filterType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="filter_show_limit", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filterShowLimit = '0';

    public function getIdLayeredCategory(): ?int
    {
        return $this->idLayeredCategory;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function setIdCategory(int $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    public function getIdValue(): ?int
    {
        return $this->idValue;
    }

    public function setIdValue(?int $idValue): self
    {
        $this->idValue = $idValue;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getFilterType(): ?int
    {
        return $this->filterType;
    }

    public function setFilterType(int $filterType): self
    {
        $this->filterType = $filterType;

        return $this;
    }

    public function getFilterShowLimit(): ?int
    {
        return $this->filterShowLimit;
    }

    public function setFilterShowLimit(int $filterShowLimit): self
    {
        $this->filterShowLimit = $filterShowLimit;

        return $this;
    }


}
