<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomizedData
 *
 * @ORM\Table(name="ps_customized_data")
 * @ORM\Entity
 */
class PsCustomizedData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customization", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCustomization;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="index", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $index;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="id_module", type="integer", nullable=false)
     */
    private $idModule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $price = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=20, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private $weight = '0.000000';

    public function getIdCustomization(): ?int
    {
        return $this->idCustomization;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function getIndex(): ?int
    {
        return $this->index;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }


}
