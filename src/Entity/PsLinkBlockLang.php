<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLinkBlockLang
 *
 * @ORM\Table(name="ps_link_block_lang")
 * @ORM\Entity
 */
class PsLinkBlockLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_link_block", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLinkBlock;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_content", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $customContent = 'NULL';

    public function getIdLinkBlock(): ?int
    {
        return $this->idLinkBlock;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
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

    public function getCustomContent(): ?string
    {
        return $this->customContent;
    }

    public function setCustomContent(?string $customContent): self
    {
        $this->customContent = $customContent;

        return $this;
    }


}
