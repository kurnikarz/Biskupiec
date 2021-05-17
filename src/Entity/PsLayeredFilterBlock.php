<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredFilterBlock
 *
 * @ORM\Table(name="ps_layered_filter_block")
 * @ORM\Entity
 */
class PsLayeredFilterBlock
{
    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hash = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $data = 'NULL';

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
