<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsWebservicePermission
 *
 * @ORM\Table(name="ps_webservice_permission", uniqueConstraints={@ORM\UniqueConstraint(name="resource_2", columns={"resource", "method", "id_webservice_account"})}, indexes={@ORM\Index(name="resource", columns={"resource"}), @ORM\Index(name="method", columns={"method"}), @ORM\Index(name="id_webservice_account", columns={"id_webservice_account"})})
 * @ORM\Entity
 */
class PsWebservicePermission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_permission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebservicePermission;

    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=50, nullable=false)
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=0, nullable=false)
     */
    private $method;

    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_account", type="integer", nullable=false)
     */
    private $idWebserviceAccount;

    public function getIdWebservicePermission(): ?int
    {
        return $this->idWebservicePermission;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(string $resource): self
    {
        $this->resource = $resource;

        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getIdWebserviceAccount(): ?int
    {
        return $this->idWebserviceAccount;
    }

    public function setIdWebserviceAccount(int $idWebserviceAccount): self
    {
        $this->idWebserviceAccount = $idWebserviceAccount;

        return $this;
    }


}
