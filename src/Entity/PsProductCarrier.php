<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCarrier
 *
 * @ORM\Table(name="ps_product_carrier")
 * @ORM\Entity
 */
class PsProductCarrier
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
     * @ORM\Column(name="id_carrier_reference", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrierReference;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdCarrierReference(): ?int
    {
        return $this->idCarrierReference;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
