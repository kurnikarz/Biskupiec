<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsRequiredField
 *
 * @ORM\Table(name="ps_required_field", indexes={@ORM\Index(name="object_name", columns={"object_name"})})
 * @ORM\Entity
 */
class PsRequiredField
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_required_field", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequiredField;

    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=32, nullable=false)
     */
    private $objectName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=32, nullable=false)
     */
    private $fieldName;

    public function getIdRequiredField(): ?int
    {
        return $this->idRequiredField;
    }

    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    public function setObjectName(string $objectName): self
    {
        $this->objectName = $objectName;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }


}
