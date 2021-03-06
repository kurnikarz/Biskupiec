<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMessageReaded
 *
 * @ORM\Table(name="ps_message_readed")
 * @ORM\Entity
 */
class PsMessageReaded
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMessage;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEmployee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
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
