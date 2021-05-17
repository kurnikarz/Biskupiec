<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSearchWord
 *
 * @ORM\Table(name="ps_search_word", uniqueConstraints={@ORM\UniqueConstraint(name="id_lang", columns={"id_lang", "id_shop", "word"})})
 * @ORM\Entity
 */
class PsSearchWord
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_word", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWord;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=30, nullable=false)
     */
    private $word;

    public function getIdWord(): ?int
    {
        return $this->idWord;
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

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }


}
