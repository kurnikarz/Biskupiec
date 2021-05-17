<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTranslation
 *
 * @ORM\Table(name="ps_translation", indexes={@ORM\Index(name="IDX_ADEBEB36BA299860", columns={"id_lang"}), @ORM\Index(name="key", columns={"domain"})})
 * @ORM\Entity
 */
class PsTranslation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_translation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTranslation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="text", length=65535, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=false)
     */
    private $translation;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=80, nullable=false)
     */
    private $domain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="theme", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $theme = 'NULL';

    public function getIdTranslation(): ?int
    {
        return $this->idTranslation;
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

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(string $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }


}
