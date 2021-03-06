<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductTag
 *
 * @ORM\Table(name="ps_product_tag", indexes={@ORM\Index(name="id_lang", columns={"id_lang", "id_tag"}), @ORM\Index(name="id_tag", columns={"id_tag"})})
 * @ORM\Entity
 */
class PsProductTag
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
     * @ORM\Column(name="id_tag", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTag;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdTag(): ?int
    {
        return $this->idTag;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }


}
