<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCmsRoleLang
 *
 * @ORM\Table(name="ps_cms_role_lang")
 * @ORM\Entity
 */
class PsCmsRoleLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cms_role", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCmsRole;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shop", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idShop;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    public function getIdCmsRole(): ?int
    {
        return $this->idCmsRole;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getIdShop(): ?int
    {
        return $this->idShop;
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


}
