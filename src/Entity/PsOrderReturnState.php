<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsOrderReturnState
 *
 * @ORM\Table(name="ps_order_return_state")
 * @ORM\Entity
 */
class PsOrderReturnState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order_return_state", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderReturnState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $color = 'NULL';

    public function getIdOrderReturnState(): ?int
    {
        return $this->idOrderReturnState;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }


}
