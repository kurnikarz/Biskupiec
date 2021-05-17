<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCommentCriterion
 *
 * @ORM\Table(name="ps_product_comment_criterion")
 * @ORM\Entity
 */
class PsProductCommentCriterion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductCommentCriterion;

    /**
     * @var bool
     *
     * @ORM\Column(name="id_product_comment_criterion_type", type="boolean", nullable=false)
     */
    private $idProductCommentCriterionType;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    public function getIdProductCommentCriterion(): ?int
    {
        return $this->idProductCommentCriterion;
    }

    public function getIdProductCommentCriterionType(): ?bool
    {
        return $this->idProductCommentCriterionType;
    }

    public function setIdProductCommentCriterionType(bool $idProductCommentCriterionType): self
    {
        $this->idProductCommentCriterionType = $idProductCommentCriterionType;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
