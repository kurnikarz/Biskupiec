<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsInfoLang
 *
 * @ORM\Table(name="ps_info_lang")
 * @ORM\Entity
 */
class PsInfoLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_info", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idInfo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    public function getIdInfo(): ?int
    {
        return $this->idInfo;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
