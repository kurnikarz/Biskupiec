<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCmsLang
 *
 * @ORM\Table(name="ps_cms_lang")
 * @ORM\Entity
 */
class PsCmsLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCms;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=false)
     */
    private $metaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="head_seo_title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $headSeoTitle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="string", length=512, nullable=true, options={"default"="NULL"})
     */
    private $metaDescription = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $metaKeywords = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $content = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="link_rewrite", type="string", length=128, nullable=false)
     */
    private $linkRewrite;

    public function getIdCms(): ?int
    {
        return $this->idCms;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getHeadSeoTitle(): ?string
    {
        return $this->headSeoTitle;
    }

    public function setHeadSeoTitle(?string $headSeoTitle): self
    {
        $this->headSeoTitle = $headSeoTitle;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getLinkRewrite(): ?string
    {
        return $this->linkRewrite;
    }

    public function setLinkRewrite(string $linkRewrite): self
    {
        $this->linkRewrite = $linkRewrite;

        return $this;
    }


}
