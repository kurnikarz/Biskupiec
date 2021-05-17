<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsConnectionsSource
 *
 * @ORM\Table(name="ps_connections_source", indexes={@ORM\Index(name="http_referer", columns={"http_referer"}), @ORM\Index(name="request_uri", columns={"request_uri"}), @ORM\Index(name="connections", columns={"id_connections"}), @ORM\Index(name="orderby", columns={"date_add"})})
 * @ORM\Entity
 */
class PsConnectionsSource
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections_source", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConnectionsSource;

    /**
     * @var int
     *
     * @ORM\Column(name="id_connections", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idConnections;

    /**
     * @var string|null
     *
     * @ORM\Column(name="http_referer", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $httpReferer = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_uri", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $requestUri = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $keywords = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdConnectionsSource(): ?int
    {
        return $this->idConnectionsSource;
    }

    public function getIdConnections(): ?int
    {
        return $this->idConnections;
    }

    public function setIdConnections(int $idConnections): self
    {
        $this->idConnections = $idConnections;

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

    public function getRequestUri(): ?string
    {
        return $this->requestUri;
    }

    public function setRequestUri(?string $requestUri): self
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

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
