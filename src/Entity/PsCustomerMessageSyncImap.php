<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PsCustomerMessageSyncImap
 *
 * @ORM\Table(name="ps_customer_message_sync_imap", indexes={@ORM\Index(name="md5_header_index", columns={"md5_header"})})
 * @ORM\Entity
 */
class PsCustomerMessageSyncImap
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
     * @var binary
     *
     * @ORM\Column(name="md5_header", type="binary", nullable=false)
     */
    private $md5Header;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMd5Header()
    {
        return $this->md5Header;
    }

    public function setMd5Header($md5Header): self
    {
        $this->md5Header = $md5Header;

        return $this;
    }


}
