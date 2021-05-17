<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsEmployeeSession
 *
 * @ORM\Table(name="ps_employee_session")
 * @ORM\Entity
 */
class PsEmployeeSession
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_employee_session", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployeeSession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idEmployee = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $token = 'NULL';

    public function getIdEmployeeSession(): ?int
    {
        return $this->idEmployeeSession;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

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
