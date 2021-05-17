<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsShopGroup
 *
 * @ORM\Table(name="ps_shop_group")
 * @ORM\Entity
 */
class PsShopGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_shop_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShopGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="share_customer", type="boolean", nullable=false)
     */
    private $shareCustomer;

    /**
     * @var bool
     *
     * @ORM\Column(name="share_order", type="boolean", nullable=false)
     */
    private $shareOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="share_stock", type="boolean", nullable=false)
     */
    private $shareStock;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    public function getIdShopGroup(): ?int
    {
        return $this->idShopGroup;
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

    public function getShareCustomer(): ?bool
    {
        return $this->shareCustomer;
    }

    public function setShareCustomer(bool $shareCustomer): self
    {
        $this->shareCustomer = $shareCustomer;

        return $this;
    }

    public function getShareOrder(): ?bool
    {
        return $this->shareOrder;
    }

    public function setShareOrder(bool $shareOrder): self
    {
        $this->shareOrder = $shareOrder;

        return $this;
    }

    public function getShareStock(): ?bool
    {
        return $this->shareStock;
    }

    public function setShareStock(bool $shareStock): self
    {
        $this->shareStock = $shareStock;

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


}
