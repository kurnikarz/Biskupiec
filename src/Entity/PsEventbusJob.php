<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsEventbusJob
 *
 * @ORM\Table(name="ps_eventbus_job")
 * @ORM\Entity
 */
class PsEventbusJob
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="job_id", type="string", length=200, nullable=false)
     */
    private $jobId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobId(): ?string
    {
        return $this->jobId;
    }

    public function setJobId(string $jobId): self
    {
        $this->jobId = $jobId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}
