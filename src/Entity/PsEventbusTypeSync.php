<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsEventbusTypeSync
 *
 * @ORM\Table(name="ps_eventbus_type_sync")
 * @ORM\Entity
 */
class PsEventbusTypeSync
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="offset", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $offset = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang_iso", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $langIso = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="full_sync_finished", type="boolean", nullable=false)
     */
    private $fullSyncFinished = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sync_date", type="datetime", nullable=false)
     */
    private $lastSyncDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getLangIso(): ?string
    {
        return $this->langIso;
    }

    public function setLangIso(?string $langIso): self
    {
        $this->langIso = $langIso;

        return $this;
    }

    public function getFullSyncFinished(): ?bool
    {
        return $this->fullSyncFinished;
    }

    public function setFullSyncFinished(bool $fullSyncFinished): self
    {
        $this->fullSyncFinished = $fullSyncFinished;

        return $this;
    }

    public function getLastSyncDate(): ?\DateTimeInterface
    {
        return $this->lastSyncDate;
    }

    public function setLastSyncDate(\DateTimeInterface $lastSyncDate): self
    {
        $this->lastSyncDate = $lastSyncDate;

        return $this;
    }


}
