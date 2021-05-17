<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMetaLang
 *
 * @ORM\Table(name="ps_meta_lang", indexes={@ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="id_lang", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsMetaLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_meta", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMeta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

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
     * @ORM\Column(name="title", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $keywords = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="url_rewrite", type="string", length=254, nullable=false)
     */
    private $urlRewrite;

    public function getIdMeta(): ?int
    {
        return $this->idMeta;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getUrlRewrite(): ?string
    {
        return $this->urlRewrite;
    }

    public function setUrlRewrite(string $urlRewrite): self
    {
        $this->urlRewrite = $urlRewrite;

        return $this;
    }


}
