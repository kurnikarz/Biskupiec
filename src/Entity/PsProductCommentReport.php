<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductCommentReport
 *
 * @ORM\Table(name="ps_product_comment_report")
 * @ORM\Entity
 */
class PsProductCommentReport
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

    public function getIdProductComment(): ?int
    {
        return $this->idProductComment;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }


}
