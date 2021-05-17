<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsWarehouse
 *
 * @ORM\Table(name="ps_warehouse")
 * @ORM\Entity
 */
class PsWarehouse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWarehouse;

    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_address", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idEmployee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $reference = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="management_type", type="string", length=0, nullable=false, options={"default"="'WA'"})
     */
    private $managementType = '\'WA\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
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

    public function getIdAddress(): ?int
    {
        return $this->idAddress;
    }

    public function setIdAddress(int $idAddress): self
    {
        $this->idAddress = $idAddress;

        return $this;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getManagementType(): ?string
    {
        return $this->managementType;
    }

    public function setManagementType(string $managementType): self
    {
        $this->managementType = $managementType;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }


}
