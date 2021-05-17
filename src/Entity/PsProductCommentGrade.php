<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCommentGrade
 *
 * @ORM\Table(name="ps_product_comment_grade", indexes={@ORM\Index(name="id_product_comment_criterion", columns={"id_product_comment_criterion"})})
 * @ORM\Entity
 */
class PsProductCommentGrade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductComment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment_criterion", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductCommentCriterion;

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $grade;

    public function getIdProductComment(): ?int
    {
        return $this->idProductComment;
    }

    public function getIdProductCommentCriterion(): ?int
    {
        return $this->idProductCommentCriterion;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }


}
