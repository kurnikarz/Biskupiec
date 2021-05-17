<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCartRuleProductRule
 *
 * @ORM\Table(name="ps_cart_rule_product_rule")
 * @ORM\Entity
 */
class PsCartRuleProductRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_rule", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductRule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_rule_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProductRuleGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;

    public function getIdProductRule(): ?int
    {
        return $this->idProductRule;
    }

    public function getIdProductRuleGroup(): ?int
    {
        return $this->idProductRuleGroup;
    }

    public function setIdProductRuleGroup(int $idProductRuleGroup): self
    {
        $this->idProductRuleGroup = $idProductRuleGroup;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
