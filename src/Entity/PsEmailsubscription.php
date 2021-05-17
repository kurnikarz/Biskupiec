<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsEmailsubscription
 *
 * @ORM\Table(name="ps_emailsubscription")
 * @ORM\Entity
 */
class PsEmailsubscription
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="newsletter_date_add", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $newsletterDateAdd = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_registration_newsletter", type="string", length=15, nullable=false)
     */
    private $ipRegistrationNewsletter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $httpReferer = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     */
    private $idLang = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNewsletterDateAdd(): ?\DateTimeInterface
    {
        return $this->newsletterDateAdd;
    }

    public function setNewsletterDateAdd(?\DateTimeInterface $newsletterDateAdd): self
    {
        $this->newsletterDateAdd = $newsletterDateAdd;

        return $this;
    }

    public function getIpRegistrationNewsletter(): ?string
    {
        return $this->ipRegistrationNewsletter;
    }

    public function setIpRegistrationNewsletter(string $ipRegistrationNewsletter): self
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }


}
