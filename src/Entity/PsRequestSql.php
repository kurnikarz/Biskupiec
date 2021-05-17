<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsRequestSql
 *
 * @ORM\Table(name="ps_request_sql")
 * @ORM\Entity
 */
class PsRequestSql
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_request_sql", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequestSql;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sql", type="text", length=65535, nullable=false)
     */
    private $sql;

    public function getIdRequestSql(): ?int
    {
        return $this->idRequestSql;
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

    public function getSql(): ?string
    {
        return $this->sql;
    }

    public function setSql(string $sql): self
    {
        $this->sql = $sql;

        return $this;
    }


}
