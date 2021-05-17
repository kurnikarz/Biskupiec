<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsAttachmentLang
 *
 * @ORM\Table(name="ps_attachment_lang")
 * @ORM\Entity
 */
class PsAttachmentLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attachment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAttachment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    public function getIdAttachment(): ?int
    {
        return $this->idAttachment;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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


}
