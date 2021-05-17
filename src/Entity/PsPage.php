<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsPage
 *
 * @ORM\Table(name="ps_page", indexes={@ORM\Index(name="id_page_type", columns={"id_page_type"}), @ORM\Index(name="id_object", columns={"id_object"})})
 * @ORM\Entity
 */
class PsPage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;

    /**
     * @var int
     *
     * @ORM\Column(name="id_page_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idPageType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_object", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idObject = NULL;

    public function getIdPage(): ?int
    {
        return $this->idPage;
    }

    public function getIdPageType(): ?int
    {
        return $this->idPageType;
    }

    public function setIdPageType(int $idPageType): self
    {
        $this->idPageType = $idPageType;

        return $this;
    }

    public function getIdObject(): ?int
    {
        return $this->idObject;
    }

    public function setIdObject(?int $idObject): self
    {
        $this->idObject = $idObject;

        return $this;
    }


}
