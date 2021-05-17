<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsStoreLang
 *
 * @ORM\Table(name="ps_store_lang")
 * @ORM\Entity
 */
class PsStoreLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_store", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idStore;

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=255, nullable=false)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $address2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="hours", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $hours = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    public function getIdStore(): ?int
    {
        return $this->idStore;
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

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getHours(): ?string
    {
        return $this->hours;
    }

    public function setHours(?string $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
