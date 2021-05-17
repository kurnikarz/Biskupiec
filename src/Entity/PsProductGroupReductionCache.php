<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductGroupReductionCache
 *
 * @ORM\Table(name="ps_product_group_reduction_cache")
 * @ORM\Entity
 */
class PsProductGroupReductionCache
{
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
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=4, nullable=false)
     */
    private $reduction;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }


}
