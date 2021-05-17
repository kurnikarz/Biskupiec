<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsConfiguration
 *
 * @ORM\Table(name="ps_configuration", indexes={@ORM\Index(name="id_shop_group", columns={"id_shop_group"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsConfiguration
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_configuration", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfiguration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idShopGroup = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idShop = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

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

    public function getIdConfiguration(): ?int
    {
        return $this->idConfiguration;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(?int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
