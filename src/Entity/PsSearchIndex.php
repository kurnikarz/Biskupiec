<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSearchIndex
 *
 * @ORM\Table(name="ps_search_index", indexes={@ORM\Index(name="id_product", columns={"id_product", "weight"})})
 * @ORM\Entity
 */
class PsSearchIndex
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
     * @ORM\Column(name="id_word", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWord;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="smallint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $weight = '1';

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getIdWord(): ?int
    {
        return $this->idWord;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
