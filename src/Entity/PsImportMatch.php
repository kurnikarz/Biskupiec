<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsImportMatch
 *
 * @ORM\Table(name="ps_import_match")
 * @ORM\Entity
 */
class PsImportMatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_import_match", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImportMatch;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="match", type="text", length=65535, nullable=false)
     */
    private $match;

    /**
     * @var int
     *
     * @ORM\Column(name="skip", type="integer", nullable=false)
     */
    private $skip;

    public function getIdImportMatch(): ?int
    {
        return $this->idImportMatch;
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

    public function getMatch(): ?string
    {
        return $this->match;
    }

    public function setMatch(string $match): self
    {
        $this->match = $match;

        return $this;
    }

    public function getSkip(): ?int
    {
        return $this->skip;
    }

    public function setSkip(int $skip): self
    {
        $this->skip = $skip;

        return $this;
    }


}
