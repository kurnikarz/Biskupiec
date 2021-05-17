<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLog
 *
 * @ORM\Table(name="ps_log")
 * @ORM\Entity
 */
class PsLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var bool
     *
     * @ORM\Column(name="severity", type="boolean", nullable=false)
     */
    private $severity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="error_code", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $errorCode = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="object_type", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $objectType = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="object_id", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $objectId = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idEmployee = NULL;

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

    public function getIdLog(): ?int
    {
        return $this->idLog;
    }

    public function getSeverity(): ?bool
    {
        return $this->severity;
    }

    public function setSeverity(bool $severity): self
    {
        $this->severity = $severity;

        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

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
