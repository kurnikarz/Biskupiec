<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsSmartyLastFlush
 *
 * @ORM\Table(name="ps_smarty_last_flush")
 * @ORM\Entity
 */
class PsSmartyLastFlush
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_flush", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $lastFlush = '\'0000-00-00 00:00:00\'';

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getLastFlush(): ?\DateTimeInterface
    {
        return $this->lastFlush;
    }

    public function setLastFlush(\DateTimeInterface $lastFlush): self
    {
        $this->lastFlush = $lastFlush;

        return $this;
    }


}
