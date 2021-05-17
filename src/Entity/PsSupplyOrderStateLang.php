<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSupplyOrderStateLang
 *
 * @ORM\Table(name="ps_supply_order_state_lang")
 * @ORM\Entity
 */
class PsSupplyOrderStateLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_supply_order_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSupplyOrderState;

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
     * @ORM\Column(name="name", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    public function getIdSupplyOrderState(): ?int
    {
        return $this->idSupplyOrderState;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
