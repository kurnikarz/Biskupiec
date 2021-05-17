<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsEventbusDeletedObjects
 *
 * @ORM\Table(name="ps_eventbus_deleted_objects")
 * @ORM\Entity
 */
class PsEventbusDeletedObjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="id_object", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idObject;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getIdObject(): ?int
    {
        return $this->idObject;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}
