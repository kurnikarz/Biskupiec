<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsImageLang
 *
 * @ORM\Table(name="ps_image_lang", indexes={@ORM\Index(name="id_image", columns={"id_image"})})
 * @ORM\Entity
 */
class PsImageLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idImage;

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
     * @ORM\Column(name="legend", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $legend = 'NULL';

    public function getIdImage(): ?int
    {
        return $this->idImage;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getLegend(): ?string
    {
        return $this->legend;
    }

    public function setLegend(?string $legend): self
    {
        $this->legend = $legend;

        return $this;
    }


}
