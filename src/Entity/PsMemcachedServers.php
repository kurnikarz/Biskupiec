<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMemcachedServers
 *
 * @ORM\Table(name="ps_memcached_servers")
 * @ORM\Entity
 */
class PsMemcachedServers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_memcached_server", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMemcachedServer;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=254, nullable=false)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="port", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $port;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $weight;

    public function getIdMemcachedServer(): ?int
    {
        return $this->idMemcachedServer;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
