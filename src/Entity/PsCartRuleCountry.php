<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleCountry
 *
 * @ORM\Table(name="ps_cart_rule_country")
 * @ORM\Entity
 */
class PsCartRuleCountry
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
     * @ORM\Column(name="id_country", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;

    public function getIdCartRule(): ?int
    {
        return $this->idCartRule;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }


}
