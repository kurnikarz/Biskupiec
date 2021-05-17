<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCarrierTaxRulesGroupShop
 *
 * @ORM\Table(name="ps_carrier_tax_rules_group_shop")
 * @ORM\Entity
 */
class PsCarrierTaxRulesGroupShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarrier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTaxRulesGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }


}
