<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderPayment
 *
 * @ORM\Table(name="ps_order_payment", indexes={@ORM\Index(name="order_reference", columns={"order_reference"})})
 * @ORM\Entity
 */
class PsOrderPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_payment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderPayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_reference", type="string", length=9, nullable=true, options={"default"="NULL"})
     */
    private $orderReference = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=6, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=255, nullable=false)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=13, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private $conversionRate = '1.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $transactionId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_number", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $cardNumber = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_brand", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $cardBrand = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_expiration", type="string", length=7, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $cardExpiration = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_holder", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $cardHolder = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdOrderPayment(): ?int
    {
        return $this->idOrderPayment;
    }

    public function getOrderReference(): ?string
    {
        return $this->orderReference;
    }

    public function setOrderReference(?string $orderReference): self
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function setIdCurrency(int $idCurrency): self
    {
        $this->idCurrency = $idCurrency;

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

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    public function setConversionRate(string $conversionRate): self
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getCardBrand(): ?string
    {
        return $this->cardBrand;
    }

    public function setCardBrand(?string $cardBrand): self
    {
        $this->cardBrand = $cardBrand;

        return $this;
    }

    public function getCardExpiration(): ?string
    {
        return $this->cardExpiration;
    }

    public function setCardExpiration(?string $cardExpiration): self
    {
        $this->cardExpiration = $cardExpiration;

        return $this;
    }

    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }

    public function setCardHolder(?string $cardHolder): self
    {
        $this->cardHolder = $cardHolder;

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
