<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLinksmenutop
 *
 * @ORM\Table(name="ps_linksmenutop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsLinksmenutop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_linksmenutop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLinksmenutop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var bool
     *
     * @ORM\Column(name="new_window", type="boolean", nullable=false)
     */
    private $newWindow;

    public function getIdLinksmenutop(): ?int
    {
        return $this->idLinksmenutop;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getNewWindow(): ?bool
    {
        return $this->newWindow;
    }

    public function setNewWindow(bool $newWindow): self
    {
        $this->newWindow = $newWindow;

        return $this;
    }


}
