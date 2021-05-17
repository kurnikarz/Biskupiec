<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPsgdprConsentLang
 *
 * @ORM\Table(name="ps_psgdpr_consent_lang")
 * @ORM\Entity
 */
class PsPsgdprConsentLang
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
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $message = 'NULL';

    public function getIdGdprConsent(): ?int
    {
        return $this->idGdprConsent;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }


}
