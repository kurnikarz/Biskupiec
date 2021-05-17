<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsTab
 *
 * @ORM\Table(name="ps_tab")
 * @ORM\Entity
 */
class PsTab
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTab;

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false)
     */
    private $idParent;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $module = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=64, nullable=false)
     */
    private $className;

    /**
     * @var string|null
     *
     * @ORM\Column(name="route_name", type="string", length=256, nullable=true, options={"default"="NULL"})
     */
    private $routeName = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_host_mode", type="boolean", nullable=false)
     */
    private $hideHostMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $icon = 'NULL';

    public function getIdTab(): ?int
    {
        return $this->idTab;
    }

    public function getIdParent(): ?int
    {
        return $this->idParent;
    }

    public function setIdParent(int $idParent): self
    {
        $this->idParent = $idParent;

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

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getClassName(): ?string
    {
        return $this->className;
    }

    public function setClassName(string $className): self
    {
        $this->className = $className;

        return $this;
    }

    public function getRouteName(): ?string
    {
        return $this->routeName;
    }

    public function setRouteName(?string $routeName): self
    {
        $this->routeName = $routeName;

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

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getHideHostMode(): ?bool
    {
        return $this->hideHostMode;
    }

    public function setHideHostMode(bool $hideHostMode): self
    {
        $this->hideHostMode = $hideHostMode;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }


}
