<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrderState
 *
 * @ORM\Table(name="ps_supply_order_state")
 * @ORM\Entity
 */
class PsSupplyOrderState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupplyOrderState;

    /**
     * @var bool
     *
     * @ORM\Column(name="delivery_note", type="boolean", nullable=false)
     */
    private $deliveryNote = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="editable", type="boolean", nullable=false)
     */
    private $editable = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="receipt_state", type="boolean", nullable=false)
     */
    private $receiptState = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pending_receipt", type="boolean", nullable=false)
     */
    private $pendingReceipt = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="enclosed", type="boolean", nullable=false)
     */
    private $enclosed = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $color = 'NULL';

    public function getIdSupplyOrderState(): ?int
    {
        return $this->idSupplyOrderState;
    }

    public function getDeliveryNote(): ?bool
    {
        return $this->deliveryNote;
    }

    public function setDeliveryNote(bool $deliveryNote): self
    {
        $this->deliveryNote = $deliveryNote;

        return $this;
    }

    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    public function setEditable(bool $editable): self
    {
        $this->editable = $editable;

        return $this;
    }

    public function getReceiptState(): ?bool
    {
        return $this->receiptState;
    }

    public function setReceiptState(bool $receiptState): self
    {
        $this->receiptState = $receiptState;

        return $this;
    }

    public function getPendingReceipt(): ?bool
    {
        return $this->pendingReceipt;
    }

    public function setPendingReceipt(bool $pendingReceipt): self
    {
        $this->pendingReceipt = $pendingReceipt;

        return $this;
    }

    public function getEnclosed(): ?bool
    {
        return $this->enclosed;
    }

    public function setEnclosed(bool $enclosed): self
    {
        $this->enclosed = $enclosed;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }


}
