<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsDateRange
 *
 * @ORM\Table(name="ps_date_range")
 * @ORM\Entity
 */
class PsDateRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_date_range", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDateRange;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_start", type="datetime", nullable=false)
     */
    private $timeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_end", type="datetime", nullable=false)
     */
    private $timeEnd;

    public function getIdDateRange(): ?int
    {
        return $this->idDateRange;
    }

    public function getTimeStart(): ?\DateTimeInterface
    {
        return $this->timeStart;
    }

    public function setTimeStart(\DateTimeInterface $timeStart): self
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    public function getTimeEnd(): ?\DateTimeInterface
    {
        return $this->timeEnd;
    }

    public function setTimeEnd(\DateTimeInterface $timeEnd): self
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }


}
