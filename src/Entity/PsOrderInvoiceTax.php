<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderInvoiceTax
 *
 * @ORM\Table(name="ps_order_invoice_tax", indexes={@ORM\Index(name="id_tax", columns={"id_tax"})})
 * @ORM\Entity
 */
class PsOrderInvoiceTax
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
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=false)
     */
    private $idOrderInvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tax", type="integer", nullable=false)
     */
    private $idTax;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $amount = '0.000000';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOrderInvoice(): ?int
    {
        return $this->idOrderInvoice;
    }

    public function setIdOrderInvoice(int $idOrderInvoice): self
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }


}
