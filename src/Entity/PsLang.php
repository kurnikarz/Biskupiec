<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLang
 *
 * @ORM\Table(name="ps_lang")
 * @ORM\Entity
 */
class PsLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=2, nullable=false)
     */
    private $isoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="language_code", type="string", length=5, nullable=false)
     */
    private $languageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=5, nullable=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="date_format_lite", type="string", length=32, nullable=false)
     */
    private $dateFormatLite;

    /**
     * @var string
     *
     * @ORM\Column(name="date_format_full", type="string", length=32, nullable=false)
     */
    private $dateFormatFull;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_rtl", type="boolean", nullable=false)
     */
    private $isRtl;

    public function getIdLang(): ?int
    {
        return $this->idLang;
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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getDateFormatLite(): ?string
    {
        return $this->dateFormatLite;
    }

    public function setDateFormatLite(string $dateFormatLite): self
    {
        $this->dateFormatLite = $dateFormatLite;

        return $this;
    }

    public function getDateFormatFull(): ?string
    {
        return $this->dateFormatFull;
    }

    public function setDateFormatFull(string $dateFormatFull): self
    {
        $this->dateFormatFull = $dateFormatFull;

        return $this;
    }

    public function getIsRtl(): ?bool
    {
        return $this->isRtl;
    }

    public function setIsRtl(bool $isRtl): self
    {
        $this->isRtl = $isRtl;

        return $this;
    }


}
