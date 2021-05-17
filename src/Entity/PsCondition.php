<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCondition
 *
 * @ORM\Table(name="ps_condition")
 * @ORM\Entity
 */
class PsCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCondition;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPsCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $request = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="operator", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $operator = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="result", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $result = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="calculation_type", type="string", length=0, nullable=true, options={"default"="NULL"})
     */
    private $calculationType = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="calculation_detail", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $calculationDetail = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;

    public function getIdCondition(): ?int
    {
        return $this->idCondition;
    }

    public function getIdPsCondition(): ?int
    {
        return $this->idPsCondition;
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

    public function getRequest(): ?string
    {
        return $this->request;
    }

    public function setRequest(?string $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getCalculationType(): ?string
    {
        return $this->calculationType;
    }

    public function setCalculationType(?string $calculationType): self
    {
        $this->calculationType = $calculationType;

        return $this;
    }

    public function getCalculationDetail(): ?string
    {
        return $this->calculationDetail;
    }

    public function setCalculationDetail(?string $calculationDetail): self
    {
        $this->calculationDetail = $calculationDetail;

        return $this;
    }

    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

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

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
