<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCarrier
 *
 * @ORM\Table(name="ps_carrier", indexes={@ORM\Index(name="id_tax_rules_group", columns={"id_tax_rules_group"}), @ORM\Index(name="reference", columns={"id_reference", "deleted", "active"}), @ORM\Index(name="deleted", columns={"deleted", "active"})})
 * @ORM\Entity
 */
class PsCarrier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carrier", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarrier;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reference", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tax_rules_group", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idTaxRulesGroup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $url = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_handling", type="boolean", nullable=false, options={"default"="1"})
     */
    private $shippingHandling = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="range_behavior", type="boolean", nullable=false)
     */
    private $rangeBehavior = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_free", type="boolean", nullable=false)
     */
    private $isFree = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping_external", type="boolean", nullable=false)
     */
    private $shippingExternal = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="need_range", type="boolean", nullable=false)
     */
    private $needRange = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_module_name", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $externalModuleName = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_method", type="integer", nullable=false)
     */
    private $shippingMethod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_width", type="integer", nullable=true)
     */
    private $maxWidth = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_height", type="integer", nullable=true)
     */
    private $maxHeight = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_depth", type="integer", nullable=true)
     */
    private $maxDepth = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="max_weight", type="decimal", precision=20, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $maxWeight = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    private $grade = '0';

    public function getIdCarrier(): ?int
    {
        return $this->idCarrier;
    }

    public function getIdReference(): ?int
    {
        return $this->idReference;
    }

    public function setIdReference(int $idReference): self
    {
        $this->idReference = $idReference;

        return $this;
    }

    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getShippingHandling(): ?bool
    {
        return $this->shippingHandling;
    }

    public function setShippingHandling(bool $shippingHandling): self
    {
        $this->shippingHandling = $shippingHandling;

        return $this;
    }

    public function getRangeBehavior(): ?bool
    {
        return $this->rangeBehavior;
    }

    public function setRangeBehavior(bool $rangeBehavior): self
    {
        $this->rangeBehavior = $rangeBehavior;

        return $this;
    }

    public function getIsModule(): ?bool
    {
        return $this->isModule;
    }

    public function setIsModule(bool $isModule): self
    {
        $this->isModule = $isModule;

        return $this;
    }

    public function getIsFree(): ?bool
    {
        return $this->isFree;
    }

    public function setIsFree(bool $isFree): self
    {
        $this->isFree = $isFree;

        return $this;
    }

    public function getShippingExternal(): ?bool
    {
        return $this->shippingExternal;
    }

    public function setShippingExternal(bool $shippingExternal): self
    {
        $this->shippingExternal = $shippingExternal;

        return $this;
    }

    public function getNeedRange(): ?bool
    {
        return $this->needRange;
    }

    public function setNeedRange(bool $needRange): self
    {
        $this->needRange = $needRange;

        return $this;
    }

    public function getExternalModuleName(): ?string
    {
        return $this->externalModuleName;
    }

    public function setExternalModuleName(?string $externalModuleName): self
    {
        $this->externalModuleName = $externalModuleName;

        return $this;
    }

    public function getShippingMethod(): ?int
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(int $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getMaxWidth(): ?int
    {
        return $this->maxWidth;
    }

    public function setMaxWidth(?int $maxWidth): self
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    public function getMaxHeight(): ?int
    {
        return $this->maxHeight;
    }

    public function setMaxHeight(?int $maxHeight): self
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    public function getMaxDepth(): ?int
    {
        return $this->maxDepth;
    }

    public function setMaxDepth(?int $maxDepth): self
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    public function getMaxWeight(): ?string
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?string $maxWeight): self
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(?int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }


}
