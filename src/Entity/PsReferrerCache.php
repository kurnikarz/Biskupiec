<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsReferrerCache
 *
 * @ORM\Table(name="ps_referrer_cache")
 * @ORM\Entity
 */
class PsReferrerCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_connections_source", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idConnectionsSource;

    /**
     * @var int
     *
     * @ORM\Column(name="id_referrer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idReferrer;

    public function getIdConnectionsSource(): ?int
    {
        return $this->idConnectionsSource;
    }

    public function getIdReferrer(): ?int
    {
        return $this->idReferrer;
    }


}
