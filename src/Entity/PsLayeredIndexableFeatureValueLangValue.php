<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsLayeredIndexableFeatureValueLangValue
 *
 * @ORM\Table(name="ps_layered_indexable_feature_value_lang_value")
 * @ORM\Entity
 */
class PsLayeredIndexableFeatureValueLangValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_feature_value", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeatureValue;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_name", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $urlName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=128, nullable=true, options={"default"="NULL"})
     */
    private $metaTitle = 'NULL';

    public function getIdFeatureValue(): ?int
    {
        return $this->idFeatureValue;
    }

    public function getIdLang(): ?int
    {
        return $this->idLang;
    }

    public function getUrlName(): ?string
    {
        return $this->urlName;
    }

    public function setUrlName(?string $urlName): self
    {
        $this->urlName = $urlName;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }


}
