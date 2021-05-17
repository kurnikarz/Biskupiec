<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsWebBrowser
 *
 * @ORM\Table(name="ps_web_browser")
 * @ORM\Entity
 */
class PsWebBrowser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_web_browser", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebBrowser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    public function getIdWebBrowser(): ?int
    {
        return $this->idWebBrowser;
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
