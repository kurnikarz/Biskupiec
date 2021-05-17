<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsStoreShop
 *
 * @ORM\Table(name="ps_store_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsStoreShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_store", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idStore;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdStore(): ?int
    {
        return $this->idStore;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
