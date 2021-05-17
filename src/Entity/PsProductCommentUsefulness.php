<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCommentUsefulness
 *
 * @ORM\Table(name="ps_product_comment_usefulness")
 * @ORM\Entity
 */
class PsProductCommentUsefulness
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
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomer;

    /**
     * @var bool
     *
     * @ORM\Column(name="usefulness", type="boolean", nullable=false)
     */
    private $usefulness;

    public function getIdProductComment(): ?int
    {
        return $this->idProductComment;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function getUsefulness(): ?bool
    {
        return $this->usefulness;
    }

    public function setUsefulness(bool $usefulness): self
    {
        $this->usefulness = $usefulness;

        return $this;
    }


}
