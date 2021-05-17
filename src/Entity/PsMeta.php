<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsMeta
 *
 * @ORM\Table(name="ps_meta", uniqueConstraints={@ORM\UniqueConstraint(name="page", columns={"page"})})
 * @ORM\Entity
 */
class PsMeta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_meta", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMeta;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=64, nullable=false)
     */
    private $page;

    /**
     * @var bool
     *
     * @ORM\Column(name="configurable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $configurable = true;

    public function getIdMeta(): ?int
    {
        return $this->idMeta;
    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function setPage(string $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getConfigurable(): ?bool
    {
        return $this->configurable;
    }

    public function setConfigurable(bool $configurable): self
    {
        $this->configurable = $configurable;

        return $this;
    }


}
