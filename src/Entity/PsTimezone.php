<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTimezone
 *
 * @ORM\Table(name="ps_timezone")
 * @ORM\Entity
 */
class PsTimezone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_timezone", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTimezone;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    public function getIdTimezone(): ?int
    {
        return $this->idTimezone;
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


}
