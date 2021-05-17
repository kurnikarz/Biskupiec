<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLinkBlockShop
 *
 * @ORM\Table(name="ps_link_block_shop")
 * @ORM\Entity
 */
class PsLinkBlockShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_link_block", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLinkBlock;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdLinkBlock(): ?int
    {
        return $this->idLinkBlock;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
