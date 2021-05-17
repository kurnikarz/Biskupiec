<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSmartyCache
 *
 * @ORM\Table(name="ps_smarty_cache", indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="cache_id", columns={"cache_id"})})
 * @ORM\Entity
 */
class PsSmartyCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_smarty_cache", type="string", length=40, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSmartyCache;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false, options={"fixed"=true})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_id", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $cacheId = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $modified = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    public function getIdSmartyCache(): ?string
    {
        return $this->idSmartyCache;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCacheId(): ?string
    {
        return $this->cacheId;
    }

    public function setCacheId(?string $cacheId): self
    {
        $this->cacheId = $cacheId;

        return $this;
    }

    public function getModified(): ?\DateTimeInterface
    {
        return $this->modified;
    }

    public function setModified(\DateTimeInterface $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }


}
