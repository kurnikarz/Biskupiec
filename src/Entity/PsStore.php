<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsStore
 *
 * @ORM\Table(name="ps_store")
 * @ORM\Entity
 */
class PsStore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_store", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStore;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCountry;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_state", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idState = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=64, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=12, nullable=false)
     */
    private $postcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="decimal", precision=13, scale=8, nullable=true, options={"default"="NULL"})
     */
    private $latitude = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="decimal", precision=13, scale=8, nullable=true, options={"default"="NULL"})
     */
    private $longitude = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $phone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $fax = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;

    public function getIdStore(): ?int
    {
        return $this->idStore;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIdState(): ?int
    {
        return $this->idState;
    }

    public function setIdState(?int $idState): self
    {
        $this->idState = $idState;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
