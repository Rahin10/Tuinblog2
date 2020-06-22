<?php

namespace App\Entity;

use App\Repository\Blog3Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Blog3Repository::class)
 */
class Blog3
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
    private $Titel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Beschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Auteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitel(): ?string
    {
        return $this->Titel;
    }

    public function setTitel(string $Titel): self
    {
        $this->Titel = $Titel;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->Beschrijving;
    }

    public function setBeschrijving(string $Beschrijving): self
    {
        $this->Beschrijving = $Beschrijving;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }
}
