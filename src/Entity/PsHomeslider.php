<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsHomeslider
 *
 * @ORM\Table(name="ps_homeslider")
 * @ORM\Entity
 */
class PsHomeslider
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_homeslider_slides", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idHomesliderSlides;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdHomesliderSlides(): ?int
    {
        return $this->idHomesliderSlides;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
