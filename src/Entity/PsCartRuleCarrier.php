<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleCarrier
 *
 * @ORM\Table(name="ps_cart_rule_carrier")
 * @ORM\Entity
 */
class PsCartRuleCarrier
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
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrier;

    public function getIdCartRule(): ?int
    {
        return $this->idCartRule;
    }

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }


}
