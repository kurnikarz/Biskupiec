<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleGroup
 *
 * @ORM\Table(name="ps_cart_rule_group")
 * @ORM\Entity
 */
class PsCartRuleGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCartRule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;

    public function getIdCartRule(): ?int
    {
        return $this->idCartRule;
    }

    public function getIdGroup(): ?int
    {
        return $this->idGroup;
    }


}
