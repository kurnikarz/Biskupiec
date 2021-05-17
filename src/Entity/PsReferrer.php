<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsReferrer
 *
 * @ORM\Table(name="ps_referrer")
 * @ORM\Entity
 */
class PsReferrer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_referrer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReferrer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passwd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_regexp", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $httpRefererRegexp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_like", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $httpRefererLike = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_regexp", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $requestUriRegexp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_like", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $requestUriLike = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_regexp_not", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $httpRefererRegexpNot = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer_like_not", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $httpRefererLikeNot = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_regexp_not", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $requestUriRegexpNot = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri_like_not", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $requestUriLikeNot = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="base_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $baseFee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percent_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentFee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="click_fee", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $clickFee = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdReferrer(): ?int
    {
        return $this->idReferrer;
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

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(?string $passwd): self
    {
        $this->passwd = $passwd;

        return $this;
    }

    public function getHttpRefererRegexp(): ?string
    {
        return $this->httpRefererRegexp;
    }

    public function setHttpRefererRegexp(?string $httpRefererRegexp): self
    {
        $this->httpRefererRegexp = $httpRefererRegexp;

        return $this;
    }

    public function getHttpRefererLike(): ?string
    {
        return $this->httpRefererLike;
    }

    public function setHttpRefererLike(?string $httpRefererLike): self
    {
        $this->httpRefererLike = $httpRefererLike;

        return $this;
    }

    public function getRequestUriRegexp(): ?string
    {
        return $this->requestUriRegexp;
    }

    public function setRequestUriRegexp(?string $requestUriRegexp): self
    {
        $this->requestUriRegexp = $requestUriRegexp;

        return $this;
    }

    public function getRequestUriLike(): ?string
    {
        return $this->requestUriLike;
    }

    public function setRequestUriLike(?string $requestUriLike): self
    {
        $this->requestUriLike = $requestUriLike;

        return $this;
    }

    public function getHttpRefererRegexpNot(): ?string
    {
        return $this->httpRefererRegexpNot;
    }

    public function setHttpRefererRegexpNot(?string $httpRefererRegexpNot): self
    {
        $this->httpRefererRegexpNot = $httpRefererRegexpNot;

        return $this;
    }

    public function getHttpRefererLikeNot(): ?string
    {
        return $this->httpRefererLikeNot;
    }

    public function setHttpRefererLikeNot(?string $httpRefererLikeNot): self
    {
        $this->httpRefererLikeNot = $httpRefererLikeNot;

        return $this;
    }

    public function getRequestUriRegexpNot(): ?string
    {
        return $this->requestUriRegexpNot;
    }

    public function setRequestUriRegexpNot(?string $requestUriRegexpNot): self
    {
        $this->requestUriRegexpNot = $requestUriRegexpNot;

        return $this;
    }

    public function getRequestUriLikeNot(): ?string
    {
        return $this->requestUriLikeNot;
    }

    public function setRequestUriLikeNot(?string $requestUriLikeNot): self
    {
        $this->requestUriLikeNot = $requestUriLikeNot;

        return $this;
    }

    public function getBaseFee(): ?string
    {
        return $this->baseFee;
    }

    public function setBaseFee(string $baseFee): self
    {
        $this->baseFee = $baseFee;

        return $this;
    }

    public function getPercentFee(): ?string
    {
        return $this->percentFee;
    }

    public function setPercentFee(string $percentFee): self
    {
        $this->percentFee = $percentFee;

        return $this;
    }

    public function getClickFee(): ?string
    {
        return $this->clickFee;
    }

    public function setClickFee(string $clickFee): self
    {
        $this->clickFee = $clickFee;

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
