<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsConfigurationKpiLang
 *
 * @ORM\Table(name="ps_configuration_kpi_lang")
 * @ORM\Entity
 */
class PsConfigurationKpiLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_configuration_kpi", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConfigurationKpi;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateUpd = 'NULL';

    public function getIdConfigurationKpi(): ?int
    {
        return $this->idConfigurationKpi;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
