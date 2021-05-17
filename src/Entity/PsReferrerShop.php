<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsReferrerShop
 *
 * @ORM\Table(name="ps_referrer_shop")
 * @ORM\Entity
 */
class PsReferrerShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_referrer", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idReferrer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_visitors", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cacheVisitors = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_visits", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cacheVisits = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_pages", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cachePages = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_registrations", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cacheRegistrations = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cache_orders", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cacheOrders = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_sales", type="decimal", precision=17, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $cacheSales = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_reg_rate", type="decimal", precision=5, scale=4, nullable=true, options={"default"="NULL"})
     */
    private $cacheRegRate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_order_rate", type="decimal", precision=5, scale=4, nullable=true, options={"default"="NULL"})
     */
    private $cacheOrderRate = 'NULL';

    public function getIdReferrer(): ?int
    {
        return $this->idReferrer;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function getCacheVisitors(): ?int
    {
        return $this->cacheVisitors;
    }

    public function setCacheVisitors(?int $cacheVisitors): self
    {
        $this->cacheVisitors = $cacheVisitors;

        return $this;
    }

    public function getCacheVisits(): ?int
    {
        return $this->cacheVisits;
    }

    public function setCacheVisits(?int $cacheVisits): self
    {
        $this->cacheVisits = $cacheVisits;

        return $this;
    }

    public function getCachePages(): ?int
    {
        return $this->cachePages;
    }

    public function setCachePages(?int $cachePages): self
    {
        $this->cachePages = $cachePages;

        return $this;
    }

    public function getCacheRegistrations(): ?int
    {
        return $this->cacheRegistrations;
    }

    public function setCacheRegistrations(?int $cacheRegistrations): self
    {
        $this->cacheRegistrations = $cacheRegistrations;

        return $this;
    }

    public function getCacheOrders(): ?int
    {
        return $this->cacheOrders;
    }

    public function setCacheOrders(?int $cacheOrders): self
    {
        $this->cacheOrders = $cacheOrders;

        return $this;
    }

    public function getCacheSales(): ?string
    {
        return $this->cacheSales;
    }

    public function setCacheSales(?string $cacheSales): self
    {
        $this->cacheSales = $cacheSales;

        return $this;
    }

    public function getCacheRegRate(): ?string
    {
        return $this->cacheRegRate;
    }

    public function setCacheRegRate(?string $cacheRegRate): self
    {
        $this->cacheRegRate = $cacheRegRate;

        return $this;
    }

    public function getCacheOrderRate(): ?string
    {
        return $this->cacheOrderRate;
    }

    public function setCacheOrderRate(?string $cacheOrderRate): self
    {
        $this->cacheOrderRate = $cacheOrderRate;

        return $this;
    }


}
