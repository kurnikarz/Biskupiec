<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCategoryProduct
 *
 * @ORM\Table(name="ps_category_product", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_category", columns={"id_category", "position"})})
 * @ORM\Entity
 */
class PsCategoryProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;

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

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
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
