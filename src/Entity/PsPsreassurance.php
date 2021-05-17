<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPsreassurance
 *
 * @ORM\Table(name="ps_psreassurance")
 * @ORM\Entity
 */
class PsPsreassurance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_psreassurance", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPsreassurance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $icon = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_icon", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $customIcon = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_link", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $typeLink = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCms = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateUpd = 'NULL';

    public function getIdPsreassurance(): ?int
    {
        return $this->idPsreassurance;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getCustomIcon(): ?string
    {
        return $this->customIcon;
    }

    public function setCustomIcon(?string $customIcon): self
    {
        $this->customIcon = $customIcon;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

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

    public function getTypeLink(): ?int
    {
        return $this->typeLink;
    }

    public function setTypeLink(?int $typeLink): self
    {
        $this->typeLink = $typeLink;

        return $this;
    }

    public function getIdCms(): ?int
    {
        return $this->idCms;
    }

    public function setIdCms(?int $idCms): self
    {
        $this->idCms = $idCms;

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

    public function setDateUpd(?\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
