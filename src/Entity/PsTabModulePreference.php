<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTabModulePreference
 *
 * @ORM\Table(name="ps_tab_module_preference", uniqueConstraints={@ORM\UniqueConstraint(name="employee_module", columns={"id_employee", "id_tab", "module"})})
 * @ORM\Entity
 */
class PsTabModulePreference
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab_module_preference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTabModulePreference;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     */
    private $idTab;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=191, nullable=false)
     */
    private $module;

    public function getIdTabModulePreference(): ?int
    {
        return $this->idTabModulePreference;
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

    public function getIdTab(): ?int
    {
        return $this->idTab;
    }

    public function setIdTab(int $idTab): self
    {
        $this->idTab = $idTab;

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


}
