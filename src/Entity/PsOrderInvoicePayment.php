<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderInvoicePayment
 *
 * @ORM\Table(name="ps_order_invoice_payment", indexes={@ORM\Index(name="id_order", columns={"id_order"}), @ORM\Index(name="order_payment", columns={"id_order_payment"})})
 * @ORM\Entity
 */
class PsOrderInvoicePayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderInvoice;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order_payment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrderPayment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;

    public function getIdOrderInvoice(): ?int
    {
        return $this->idOrderInvoice;
    }

    public function getIdOrderPayment(): ?int
    {
        return $this->idOrderPayment;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }


}
