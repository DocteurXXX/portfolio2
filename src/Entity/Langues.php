<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguesRepository")
 */
class Langues
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Langues;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Notion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangues(): ?string
    {
        return $this->Langues;
    }

    public function setLangues(string $Langues): self
    {
        $this->Langues = $Langues;

        return $this;
    }

    public function getNotion(): ?string
    {
        return $this->Notion;
    }

    public function setNotion(string $Notion): self
    {
        $this->Notion = $Notion;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
