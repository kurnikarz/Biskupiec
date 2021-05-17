<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCurrencyLang
 *
 * @ORM\Table(name="ps_currency_lang")
 * @ORM\Entity
 */
class PsCurrencyLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=255, nullable=false)
     */
    private $symbol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pattern", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pattern = 'NULL';

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

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

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }


}
