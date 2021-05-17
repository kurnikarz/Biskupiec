<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAccessory
 *
 * @ORM\Table(name="ps_accessory", indexes={@ORM\Index(name="accessory_product", columns={"id_product_1", "id_product_2"})})
 * @ORM\Entity
 */
class PsAccessory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduct1(): ?int
    {
        return $this->idProduct1;
    }

    public function setIdProduct1(int $idProduct1): self
    {
        $this->idProduct1 = $idProduct1;

        return $this;
    }

    public function getIdProduct2(): ?int
    {
        return $this->idProduct2;
    }

    public function setIdProduct2(int $idProduct2): self
    {
        $this->idProduct2 = $idProduct2;

        return $this;
    }


}
