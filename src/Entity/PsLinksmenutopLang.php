<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLinksmenutopLang
 *
 * @ORM\Table(name="ps_linksmenutop_lang", indexes={@ORM\Index(name="id_linksmenutop", columns={"id_linksmenutop", "id_lang", "id_shop"})})
 * @ORM\Entity
 */
class PsLinksmenutopLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_linksmenutop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLinksmenutop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idShop;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=128, nullable=false)
     */
    private $link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLinksmenutop(): ?int
    {
        return $this->idLinksmenutop;
    }

    public function setIdLinksmenutop(int $idLinksmenutop): self
    {
        $this->idLinksmenutop = $idLinksmenutop;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }


}
