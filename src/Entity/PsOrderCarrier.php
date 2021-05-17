<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderCarrier
 *
 * @ORM\Table(name="ps_order_carrier", indexes={@ORM\Index(name="id_order_invoice", columns={"id_order_invoice"}), @ORM\Index(name="id_order", columns={"id_order"}), @ORM\Index(name="id_carrier", columns={"id_carrier"})})
 * @ORM\Entity
 */
class PsOrderCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_carrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderCarrier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCarrier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order_invoice", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idOrderInvoice = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $weight = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_excl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $shippingCostTaxExcl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_cost_tax_incl", type="decimal", precision=20, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $shippingCostTaxIncl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $trackingNumber = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdOrderCarrier(): ?int
    {
        return $this->idOrderCarrier;
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

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function setIdCarrier(int $idCarrier): self
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    public function getIdOrderInvoice(): ?int
    {
        return $this->idOrderInvoice;
    }

    public function setIdOrderInvoice(?int $idOrderInvoice): self
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getShippingCostTaxExcl(): ?string
    {
        return $this->shippingCostTaxExcl;
    }

    public function setShippingCostTaxExcl(?string $shippingCostTaxExcl): self
    {
        $this->shippingCostTaxExcl = $shippingCostTaxExcl;

        return $this;
    }

    public function getShippingCostTaxIncl(): ?string
    {
        return $this->shippingCostTaxIncl;
    }

    public function setShippingCostTaxIncl(?string $shippingCostTaxIncl): self
    {
        $this->shippingCostTaxIncl = $shippingCostTaxIncl;

        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }


}
