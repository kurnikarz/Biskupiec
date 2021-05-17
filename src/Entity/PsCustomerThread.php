<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomerThread
 *
 * @ORM\Table(name="ps_customer_thread", indexes={@ORM\Index(name="id_product", columns={"id_product"}), @ORM\Index(name="id_contact", columns={"id_contact"}), @ORM\Index(name="id_customer", columns={"id_customer"}), @ORM\Index(name="id_shop", columns={"id_shop"}), @ORM\Index(name="id_order", columns={"id_order"}), @ORM\Index(name="id_lang", columns={"id_lang"})})
 * @ORM\Entity
 */
class PsCustomerThread
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_thread", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerThread;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $idShop = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCustomer = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_order", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idOrder = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_product", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idProduct = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="'open'"})
     */
    private $status = '\'open\'';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $token = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime", nullable=false)
     */
    private $dateUpd;

    public function getIdCustomerThread(): ?int
    {
        return $this->idCustomerThread;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    public function setIdShop(int $idShop): self
    {
        $this->idShop = $idShop;

        return $this;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function setIdLang(int $idLang): self
    {
        $this->idLang = $idLang;

        return $this;
    }

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function setIdContact(int $idContact): self
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(?int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(?int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

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

    public function getDateUpd(): ?\DateTimeInterface
    {
        return $this->dateUpd;
    }

    public function setDateUpd(\DateTimeInterface $dateUpd): self
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }


}
