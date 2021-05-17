<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSekeyword
 *
 * @ORM\Table(name="ps_sekeyword")
 * @ORM\Entity
 */
class PsSekeyword
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sekeyword", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSekeyword;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShopGroup = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=256, nullable=false)
     */
    private $keyword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdSekeyword(): ?int
    {
        return $this->idSekeyword;
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

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
    }

    public function setIdShopGroup(int $idShopGroup): self
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }


}
