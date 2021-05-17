<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCmsRole
 *
 * @ORM\Table(name="ps_cms_role", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PsCmsRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_role", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCmsRole;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cms", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCms;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    public function getIdCmsRole(): ?int
    {
        return $this->idCmsRole;
    }

    public function getIdCms(): ?int
    {
        return $this->idCms;
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


}
