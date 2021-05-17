<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLinkBlock
 *
 * @ORM\Table(name="ps_link_block")
 * @ORM\Entity
 */
class PsLinkBlock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_link_block", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLinkBlock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_hook", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idHook = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $content = 'NULL';

    public function getIdLinkBlock(): ?int
    {
        return $this->idLinkBlock;
    }

    public function getIdHook(): ?int
    {
        return $this->idHook;
    }

    public function setIdHook(?int $idHook): self
    {
        $this->idHook = $idHook;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }


}
