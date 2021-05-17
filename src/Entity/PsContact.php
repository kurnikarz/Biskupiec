<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsContact
 *
 * @ORM\Table(name="ps_contact")
 * @ORM\Entity
 */
class PsContact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="customer_service", type="boolean", nullable=false)
     */
    private $customerService = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false)
     */
    private $position = '0';

    public function getIdContact(): ?int
    {
        return $this->idContact;
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

    public function getCustomerService(): ?bool
    {
        return $this->customerService;
    }

    public function setCustomerService(bool $customerService): self
    {
        $this->customerService = $customerService;

        return $this;
    }

    public function getPosition(): ?bool
    {
        return $this->position;
    }

    public function setPosition(bool $position): self
    {
        $this->position = $position;

        return $this;
    }


}
