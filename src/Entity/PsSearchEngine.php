<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSearchEngine
 *
 * @ORM\Table(name="ps_search_engine")
 * @ORM\Entity
 */
class PsSearchEngine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_search_engine", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSearchEngine;

    /**
     * @var string
     *
     * @ORM\Column(name="server", type="string", length=64, nullable=false)
     */
    private $server;

    /**
     * @var string
     *
     * @ORM\Column(name="getvar", type="string", length=16, nullable=false)
     */
    private $getvar;

    public function getIdSearchEngine(): ?int
    {
        return $this->idSearchEngine;
    }

    public function getServer(): ?string
    {
        return $this->server;
    }

    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    public function getGetvar(): ?string
    {
        return $this->getvar;
    }

    public function setGetvar(string $getvar): self
    {
        $this->getvar = $getvar;

        return $this;
    }


}
