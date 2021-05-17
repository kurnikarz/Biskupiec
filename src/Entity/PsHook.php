<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsHook
 *
 * @ORM\Table(name="ps_hook", uniqueConstraints={@ORM\UniqueConstraint(name="hook_name", columns={"name"})})
 * @ORM\Entity
 */
class PsHook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_hook", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHook;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="position", type="boolean", nullable=false, options={"default"="1"})
     */
    private $position = true;

    public function getIdHook(): ?int
    {
        return $this->idHook;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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
