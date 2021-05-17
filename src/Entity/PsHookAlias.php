<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsHookAlias
 *
 * @ORM\Table(name="ps_hook_alias", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"})})
 * @ORM\Entity
 */
class PsHookAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hook_alias", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHookAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=191, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    public function getIdHookAlias(): ?int
    {
        return $this->idHookAlias;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
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
