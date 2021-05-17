<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeatureProduct
 *
 * @ORM\Table(name="ps_feature_product", indexes={@ORM\Index(name="id_feature_value", columns={"id_feature_value"}), @ORM\Index(name="id_product", columns={"id_product"})})
 * @ORM\Entity
 */
class PsFeatureProduct
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
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeatureValue;

    public function getIdFeature(): ?int
    {
        return $this->idFeature;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }


}
