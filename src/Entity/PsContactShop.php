<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsContactShop
 *
 * @ORM\Table(name="ps_contact_shop", indexes={@ORM\Index(name="id_shop", columns={"id_shop"})})
 * @ORM\Entity
 */
class PsContactShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idContact;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
