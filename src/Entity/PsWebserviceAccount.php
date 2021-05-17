<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsWebserviceAccount
 *
 * @ORM\Table(name="ps_webservice_account", indexes={@ORM\Index(name="key", columns={"key"})})
 * @ORM\Entity
 */
class PsWebserviceAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_account", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebserviceAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=32, nullable=false)
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=50, nullable=false, options={"default"="'WebserviceRequest'"})
     */
    private $className = '\'WebserviceRequest\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean", nullable=false)
     */
    private $isModule = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $moduleName = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    public function getIdWebserviceAccount(): ?int
    {
        return $this->idWebserviceAccount;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

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

    public function getClassName(): ?string
    {
        return $this->className;
    }

    public function setClassName(string $className): self
    {
        $this->className = $className;

        return $this;
    }

    public function getIsModule(): ?bool
    {
        return $this->isModule;
    }

    public function setIsModule(bool $isModule): self
    {
        $this->isModule = $isModule;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
