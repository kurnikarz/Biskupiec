<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCommentCriterionProduct
 *
 * @ORM\Table(name="ps_product_comment_criterion_product", indexes={@ORM\Index(name="id_product_comment_criterion", columns={"id_product_comment_criterion"})})
 * @ORM\Entity
 */
class PsProductCommentCriterionProduct
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
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductCommentCriterion;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdProductCommentCriterion(): ?int
    {
        return $this->idProductCommentCriterion;
    }


}
