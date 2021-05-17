<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsInfoShop
 *
 * @ORM\Table(name="ps_info_shop")
 * @ORM\Entity
 */
class PsInfoShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_info", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idInfo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdInfo(): ?int
    {
        return $this->idInfo;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
