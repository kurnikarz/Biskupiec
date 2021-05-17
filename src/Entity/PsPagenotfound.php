<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPagenotfound
 *
 * @ORM\Table(name="ps_pagenotfound", indexes={@ORM\Index(name="date_add", columns={"date_add"})})
 * @ORM\Entity
 */
class PsPagenotfound
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pagenotfound", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPagenotfound;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="request_uri", type="string", length=256, nullable=false)
     */
    private $requestUri;

    /**
     * @var string
     *
     * @ORM\Column(name="http_referer", type="string", length=256, nullable=false)
     */
    private $httpReferer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdPagenotfound(): ?int
    {
        return $this->idPagenotfound;
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

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getRequestUri(): ?string
    {
        return $this->requestUri;
    }

    public function setRequestUri(string $requestUri): self
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    public function getHttpReferer(): ?string
    {
        return $this->httpReferer;
    }

    public function setHttpReferer(string $httpReferer): self
    {
        $this->httpReferer = $httpReferer;

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
