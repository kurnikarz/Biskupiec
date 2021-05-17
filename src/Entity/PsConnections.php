<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsConnections
 *
 * @ORM\Table(name="ps_connections", indexes={@ORM\Index(name="id_page", columns={"id_page"}), @ORM\Index(name="id_guest", columns={"id_guest"}), @ORM\Index(name="date_add", columns={"date_add"})})
 * @ORM\Entity
 */
class PsConnections
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConnections;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idGuest;

    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ip_address", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $ipAddress = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $httpReferer = 'NULL';

    public function getIdConnections(): ?int
    {
        return $this->idConnections;
    }

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

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

    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    public function setIdGuest(int $idGuest): self
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    public function getIdPage(): ?int
    {
        return $this->idPage;
    }

    public function setIdPage(int $idPage): self
    {
        $this->idPage = $idPage;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

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

    public function getHttpReferer(): ?string
    {
        return $this->httpReferer;
    }

    public function setHttpReferer(?string $httpReferer): self
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }


}
