<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAddressFormat
 *
 * @ORM\Table(name="ps_address_format")
 * @ORM\Entity
 */
class PsAddressFormat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $format = '\'\'';

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }


}
