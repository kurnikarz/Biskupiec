<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAuthorizationRole
 *
 * @ORM\Table(name="ps_authorization_role", uniqueConstraints={@ORM\UniqueConstraint(name="slug", columns={"slug"})})
 * @ORM\Entity
 */
class PsAuthorizationRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_authorization_role", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuthorizationRole;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=191, nullable=false)
     */
    private $slug;

    public function getIdAuthorizationRole(): ?int
    {
        return $this->idAuthorizationRole;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }


}
