<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperiencesRepository")
 */
class Experiences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomSociete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lieu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateStart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateEnd;

    /**
     * @ORM\Column(type="text")
     */
    private $Missions;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Logo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getNomSociete(): ?string
    {
        return $this->NomSociete;
    }

    public function setNomSociete(string $NomSociete): self
    {
        $this->NomSociete = $NomSociete;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): self
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->DateStart;
    }

    public function setDateStart(\DateTimeInterface $DateStart): self
    {
        $this->DateStart = $DateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->DateEnd;
    }

    public function setDateEnd(\DateTimeInterface $DateEnd): self
    {
        $this->DateEnd = $DateEnd;

        return $this;
    }

    public function getMissions(): ?string
    {
        return $this->Missions;
    }

    public function setMissions(string $Missions): self
    {
        $this->Missions = $Missions;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

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
