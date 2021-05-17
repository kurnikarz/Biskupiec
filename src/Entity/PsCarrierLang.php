<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCarrierLang
 *
 * @ORM\Table(name="ps_carrier_lang")
 * @ORM\Entity
 */
class PsCarrierLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delay", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $delay = 'NULL';

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getDelay(): ?string
    {
        return $this->delay;
    }

    public function setDelay(?string $delay): self
    {
        $this->delay = $delay;

        return $this;
    }


}
