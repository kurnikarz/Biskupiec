<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsGsitemapSitemap
 *
 * @ORM\Table(name="ps_gsitemap_sitemap")
 * @ORM\Entity
 */
class PsGsitemapSitemap
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
     * @var string|null
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $link = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=true)
     */
    private $idShop = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(?int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }


}
