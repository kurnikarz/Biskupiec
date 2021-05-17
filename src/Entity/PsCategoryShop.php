<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCategoryShop
 *
 * @ORM\Table(name="ps_category_shop")
 * @ORM\Entity
 */
class PsCategoryShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
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
