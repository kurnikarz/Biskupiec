<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductAttachment
 *
 * @ORM\Table(name="ps_product_attachment")
 * @ORM\Entity
 */
class PsProductAttachment
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
     * @ORM\Column(name="id_attachment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttachment;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdAttachment(): ?int
    {
        return $this->idAttachment;
    }


}
