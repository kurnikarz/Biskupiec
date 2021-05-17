<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomerSession
 *
 * @ORM\Table(name="ps_customer_session")
 * @ORM\Entity
 */
class PsCustomerSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_session", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerSession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_customer", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idCustomer = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $token = 'NULL';

    public function getIdCustomerSession(): ?int
    {
        return $this->idCustomerSession;
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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }


}
