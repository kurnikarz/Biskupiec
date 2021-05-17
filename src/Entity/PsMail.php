<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMail
 *
 * @ORM\Table(name="ps_mail", indexes={@ORM\Index(name="recipient", columns={"recipient"})})
 * @ORM\Entity
 */
class PsMail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMail;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="string", length=126, nullable=false)
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=62, nullable=false)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=254, nullable=false)
     */
    private $subject;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $dateAdd = 'current_timestamp()';

    public function getIdMail(): ?int
    {
        return $this->idMail;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

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
