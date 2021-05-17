<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAdviceLang
 *
 * @ORM\Table(name="ps_advice_lang")
 * @ORM\Entity
 */
class PsAdviceLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdvice;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $html = 'NULL';

    public function getIdAdvice(): ?int
    {
        return $this->idAdvice;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): self
    {
        $this->html = $html;

        return $this;
    }


}
