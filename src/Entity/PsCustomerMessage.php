<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomerMessage
 *
 * @ORM\Table(name="ps_customer_message", indexes={@ORM\Index(name="id_customer_thread", columns={"id_customer_thread"}), @ORM\Index(name="id_employee", columns={"id_employee"})})
 * @ORM\Entity
 */
class PsCustomerMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerMessage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer_thread", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idCustomerThread = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idEmployee = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", length=18, nullable=true, options={"default"="NULL"})
     */
    private $fileName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $ipAddress = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $userAgent = 'NULL';

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

    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean", nullable=false)
     */
    private $private = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="read", type="boolean", nullable=false)
     */
    private $read = '0';

    public function getIdCustomerMessage(): ?int
    {
        return $this->idCustomerMessage;
    }

    public function getIdCustomerThread(): ?int
    {
        return $this->idCustomerThread;
    }

    public function setIdCustomerThread(?int $idCustomerThread): self
    {
        $this->idCustomerThread = $idCustomerThread;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

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

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->private = $private;

        return $this;
    }

    public function getRead(): ?bool
    {
        return $this->read;
    }

    public function setRead(bool $read): self
    {
        $this->read = $read;

        return $this;
    }


}
