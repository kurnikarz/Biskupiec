<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductSale
 *
 * @ORM\Table(name="ps_product_sale", indexes={@ORM\Index(name="quantity", columns={"quantity"})})
 * @ORM\Entity
 */
class PsProductSale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $quantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sale_nbr", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $saleNbr = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateUpd = 'NULL';

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSaleNbr(): ?int
    {
        return $this->saleNbr;
    }

    public function setSaleNbr(int $saleNbr): self
    {
        $this->saleNbr = $saleNbr;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
