<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsInfo
 *
 * @ORM\Table(name="ps_info")
 * @ORM\Entity
 */
class PsInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_info", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInfo;

    public function getIdInfo(): ?int
    {
        return $this->idInfo;
    }


}
