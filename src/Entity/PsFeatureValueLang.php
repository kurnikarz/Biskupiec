<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsFeatureValueLang
 *
 * @ORM\Table(name="ps_feature_value_lang")
 * @ORM\Entity
 */
class PsFeatureValueLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeatureValue;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
