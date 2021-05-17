<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsProductComment
 *
 * @ORM\Table(name="ps_product_comment", indexes={@ORM\Index(name="id_guest", columns={"id_guest"}), @ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_customer", columns={"id_customer"})})
 * @ORM\Entity
 */
class PsProductComment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product_comment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProductComment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCustomer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_guest", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idGuest = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_name", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $customerName = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="grade", type="float", precision=10, scale=0, nullable=false)
     */
    private $grade;

    /**
     * @var bool
     *
     * @ORM\Column(name="validate", type="boolean", nullable=false)
     */
    private $validate;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    public function getIdProductComment(): ?int
    {
        return $this->idProductComment;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdGuest(): ?int
    {
        return $this->idGuest;
    }

    public function setIdGuest(?int $idGuest): self
    {
        $this->idGuest = $idGuest;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }

    public function getGrade(): ?float
    {
        return $this->grade;
    }

    public function setGrade(float $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getValidate(): ?bool
    {
        return $this->validate;
    }

    public function setValidate(bool $validate): self
    {
        $this->validate = $validate;

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

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }


}
