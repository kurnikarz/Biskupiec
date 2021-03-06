<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleProductRuleValue
 *
 * @ORM\Table(name="ps_cart_rule_product_rule_value")
 * @ORM\Entity
 */
class PsCartRuleProductRuleValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductRule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idItem;

    public function getIdProductRule(): ?int
    {
        return $this->idProductRule;
    }

    public function getIdItem(): ?int
    {
        return $this->idItem;
    }


}
