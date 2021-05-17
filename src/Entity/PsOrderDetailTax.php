<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderDetailTax
 *
 * @ORM\Table(name="ps_order_detail_tax", indexes={@ORM\Index(name="id_order_detail", columns={"id_order_detail"}), @ORM\Index(name="id_tax", columns={"id_tax"})})
 * @ORM\Entity
 */
class PsOrderDetailTax
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
     * @ORM\Column(name="id_order_detail", type="integer", nullable=false)
     */
    private $idOrderDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     */
    private $idTax;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_amount", type="decimal", precision=16, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $unitAmount = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="decimal", precision=16, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $totalAmount = '0.000000';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOrderDetail(): ?int
    {
        return $this->idOrderDetail;
    }

    public function setIdOrderDetail(int $idOrderDetail): self
    {
        $this->idOrderDetail = $idOrderDetail;

        return $this;
    }

    public function getIdTax(): ?int
    {
        return $this->idTax;
    }

    public function setIdTax(int $idTax): self
    {
        $this->idTax = $idTax;

        return $this;
    }

    public function getUnitAmount(): ?string
    {
        return $this->unitAmount;
    }

    public function setUnitAmount(string $unitAmount): self
    {
        $this->unitAmount = $unitAmount;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(string $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }


}
