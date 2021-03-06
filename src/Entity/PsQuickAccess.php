<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsQuickAccess
 *
 * @ORM\Table(name="ps_quick_access")
 * @ORM\Entity
 */
class PsQuickAccess
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_quick_access", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuickAccess;

    /**
     * @var bool
     *
     * @ORM\Column(name="new_window", type="boolean", nullable=false)
     */
    private $newWindow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    public function getIdQuickAccess(): ?int
    {
        return $this->idQuickAccess;
    }

    public function getNewWindow(): ?bool
    {
        return $this->newWindow;
    }

    public function setNewWindow(bool $newWindow): self
    {
        $this->newWindow = $newWindow;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }


}
