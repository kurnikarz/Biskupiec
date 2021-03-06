<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleCombination
 *
 * @ORM\Table(name="ps_cart_rule_combination", indexes={@ORM\Index(name="id_cart_rule_1", columns={"id_cart_rule_1"}), @ORM\Index(name="id_cart_rule_2", columns={"id_cart_rule_2"})})
 * @ORM\Entity
 */
class PsCartRuleCombination
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule_1", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCartRule1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cart_rule_2", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCartRule2;

    public function getIdCartRule1(): ?int
    {
        return $this->idCartRule1;
    }

    public function getIdCartRule2(): ?int
    {
        return $this->idCartRule2;
    }


}
