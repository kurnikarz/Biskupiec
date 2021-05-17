<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPsgdprLog
 *
 * @ORM\Table(name="ps_psgdpr_log")
 * @ORM\Entity
 */
class PsPsgdprLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gdpr_log", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGdprLog;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCustomer = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idGuest = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="client_name", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $clientName = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="request_type", type="integer", nullable=false)
     */
    private $requestType;

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

    public function getIdGdprLog(): ?int
    {
        return $this->idGdprLog;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    public function setIdGuest(?int $idGuest): self
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(?string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getRequestType(): ?int
    {
        return $this->requestType;
    }

    public function setRequestType(int $requestType): self
    {
        $this->requestType = $requestType;

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
