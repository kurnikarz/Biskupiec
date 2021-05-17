<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeatureShop
 *
 * @ORM\Table(name="ps_feature_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsFeatureShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeature;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
