<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductDownload
 *
 * @ORM\Table(name="ps_product_download")
 * @ORM\Entity
 */
class PsProductDownload
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_download", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductDownload;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_filename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $displayFilename = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $filename = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_expiration", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateExpiration = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_days_accessible", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $nbDaysAccessible = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_downloadable", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $nbDownloadable = 1;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_shareable", type="boolean", nullable=false)
     */
    private $isShareable = '0';

    public function getIdProductDownload(): ?int
    {
        return $this->idProductDownload;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getDisplayFilename(): ?string
    {
        return $this->displayFilename;
    }

    public function setDisplayFilename(?string $displayFilename): self
    {
        $this->displayFilename = $displayFilename;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

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

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getNbDaysAccessible(): ?int
    {
        return $this->nbDaysAccessible;
    }

    public function setNbDaysAccessible(?int $nbDaysAccessible): self
    {
        $this->nbDaysAccessible = $nbDaysAccessible;

        return $this;
    }

    public function getNbDownloadable(): ?int
    {
        return $this->nbDownloadable;
    }

    public function setNbDownloadable(?int $nbDownloadable): self
    {
        $this->nbDownloadable = $nbDownloadable;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getIsShareable(): ?bool
    {
        return $this->isShareable;
    }

    public function setIsShareable(bool $isShareable): self
    {
        $this->isShareable = $isShareable;

        return $this;
    }


}
