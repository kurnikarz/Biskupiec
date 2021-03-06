<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsModuleAccess
 *
 * @ORM\Table(name="ps_module_access")
 * @ORM\Entity
 */
class PsModuleAccess
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
