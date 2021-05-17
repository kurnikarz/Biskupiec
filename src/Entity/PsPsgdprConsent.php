<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPsgdprConsent
 *
 * @ORM\Table(name="ps_psgdpr_consent")
 * @ORM\Entity
 */
class PsPsgdprConsent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gdpr_consent", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGdprConsent;

    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="error", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $error = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="error_message", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $errorMessage = 'NULL';

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

    public function getIdGdprConsent(): ?int
    {
        return $this->idGdprConsent;
    }

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getError(): ?int
    {
        return $this->error;
    }

    public function setError(?int $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

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
