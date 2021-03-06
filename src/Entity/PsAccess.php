<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAccess
 *
 * @ORM\Table(name="ps_access")
 * @ORM\Entity
 */
class PsAccess
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProfile;

    /**
     * @var int
     *
     * @ORM\Column(name="id_authorization_role", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAuthorizationRole;

    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }

    public function getIdAuthorizationRole(): ?int
    {
        return $this->idAuthorizationRole;
    }


}
