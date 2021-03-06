<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProfile
 *
 * @ORM\Table(name="ps_profile")
 * @ORM\Entity
 */
class PsProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfile;

    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }


}
