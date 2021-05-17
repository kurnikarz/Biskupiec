<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsModulePreference
 *
 * @ORM\Table(name="ps_module_preference", uniqueConstraints={@ORM\UniqueConstraint(name="employee_module", columns={"id_employee", "module"})})
 * @ORM\Entity
 */
class PsModulePreference
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_module_preference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulePreference;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=191, nullable=false)
     */
    private $module;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="interest", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $interest = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="favorite", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $favorite = 'NULL';

    public function getIdModulePreference(): ?int
    {
        return $this->idModulePreference;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(int $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getInterest(): ?bool
    {
        return $this->interest;
    }

    public function setInterest(?bool $interest): self
    {
        $this->interest = $interest;

        return $this;
    }

    public function getFavorite(): ?bool
    {
        return $this->favorite;
    }

    public function setFavorite(?bool $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }


}
