<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsShopUrl
 *
 * @ORM\Table(name="ps_shop_url", uniqueConstraints={@ORM\UniqueConstraint(name="full_shop_url_ssl", columns={"domain_ssl", "physical_uri", "virtual_uri"}), @ORM\UniqueConstraint(name="full_shop_url", columns={"domain", "physical_uri", "virtual_uri"})}, indexes={@ORM\Index(name="id_shop", columns={"id_shop", "main"})})
 * @ORM\Entity
 */
class PsShopUrl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_url", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShopUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=150, nullable=false)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="domain_ssl", type="string", length=150, nullable=false)
     */
    private $domainSsl;

    /**
     * @var string
     *
     * @ORM\Column(name="physical_uri", type="string", length=64, nullable=false)
     */
    private $physicalUri;

    /**
     * @var string
     *
     * @ORM\Column(name="virtual_uri", type="string", length=64, nullable=false)
     */
    private $virtualUri;

    /**
     * @var bool
     *
     * @ORM\Column(name="main", type="boolean", nullable=false)
     */
    private $main;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    public function getIdShopUrl(): ?int
    {
        return $this->idShopUrl;
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

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getDomainSsl(): ?string
    {
        return $this->domainSsl;
    }

    public function setDomainSsl(string $domainSsl): self
    {
        $this->domainSsl = $domainSsl;

        return $this;
    }

    public function getPhysicalUri(): ?string
    {
        return $this->physicalUri;
    }

    public function setPhysicalUri(string $physicalUri): self
    {
        $this->physicalUri = $physicalUri;

        return $this;
    }

    public function getVirtualUri(): ?string
    {
        return $this->virtualUri;
    }

    public function setVirtualUri(string $virtualUri): self
    {
        $this->virtualUri = $virtualUri;

        return $this;
    }

    public function getMain(): ?bool
    {
        return $this->main;
    }

    public function setMain(bool $main): self
    {
        $this->main = $main;

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


}
