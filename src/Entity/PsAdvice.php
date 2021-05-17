<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAdvice
 *
 * @ORM\Table(name="ps_advice")
 * @ORM\Entity
 */
class PsAdvice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdvice;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ps_advice", type="integer", nullable=false)
     */
    private $idPsAdvice;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     */
    private $idTab;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ids_tab", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $idsTab = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hide", type="boolean", nullable=false)
     */
    private $hide = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=0, nullable=false)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selector", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $selector = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="start_day", type="integer", nullable=false)
     */
    private $startDay = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="stop_day", type="integer", nullable=false)
     */
    private $stopDay = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="weight", type="integer", nullable=true, options={"default"="1"})
     */
    private $weight = 1;

    public function getIdAdvice(): ?int
    {
        return $this->idAdvice;
    }

    public function getIdPsAdvice(): ?int
    {
        return $this->idPsAdvice;
    }

    public function setIdPsAdvice(int $idPsAdvice): self
    {
        $this->idPsAdvice = $idPsAdvice;

        return $this;
    }

    public function getIdTab(): ?int
    {
        return $this->idTab;
    }

    public function setIdTab(int $idTab): self
    {
        $this->idTab = $idTab;

        return $this;
    }

    public function getIdsTab(): ?string
    {
        return $this->idsTab;
    }

    public function setIdsTab(?string $idsTab): self
    {
        $this->idsTab = $idsTab;

        return $this;
    }

    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

        return $this;
    }

    public function getHide(): ?bool
    {
        return $this->hide;
    }

    public function setHide(bool $hide): self
    {
        $this->hide = $hide;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getSelector(): ?string
    {
        return $this->selector;
    }

    public function setSelector(?string $selector): self
    {
        $this->selector = $selector;

        return $this;
    }

    public function getStartDay(): ?int
    {
        return $this->startDay;
    }

    public function setStartDay(int $startDay): self
    {
        $this->startDay = $startDay;

        return $this;
    }

    public function getStopDay(): ?int
    {
        return $this->stopDay;
    }

    public function setStopDay(int $stopDay): self
    {
        $this->stopDay = $stopDay;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
