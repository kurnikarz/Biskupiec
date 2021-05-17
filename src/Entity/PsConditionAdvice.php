<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsConditionAdvice
 *
 * @ORM\Table(name="ps_condition_advice")
 * @ORM\Entity
 */
class PsConditionAdvice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCondition;

    /**
     * @var int
     *
     * @ORM\Column(name="id_advice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdvice;

    /**
     * @var bool
     *
     * @ORM\Column(name="display", type="boolean", nullable=false)
     */
    private $display = '0';

    public function getIdCondition(): ?int
    {
        return $this->idCondition;
    }

    public function getIdAdvice(): ?int
    {
        return $this->idAdvice;
    }

    public function getDisplay(): ?bool
    {
        return $this->display;
    }

    public function setDisplay(bool $display): self
    {
        $this->display = $display;

        return $this;
    }


}
