<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCategoryGroup
 *
 * @ORM\Table(name="ps_category_group", indexes={@ORM\Index(name="id_category", columns={"id_category"}), @ORM\Index(name="id_group", columns={"id_group"})})
 * @ORM\Entity
 */
class PsCategoryGroup
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
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }


}
