<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $xpRequired;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Classe", cascade={"persist", "remove"})
     */
    private $classeSuperieure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getXpRequired(): ?int
    {
        return $this->xpRequired;
    }

    public function setXpRequired(int $xpRequired): self
    {
        $this->xpRequired = $xpRequired;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getClasseSuperieure(): ?self
    {
        return $this->classeSuperieure;
    }

    public function setClasseSuperieure(?self $classeSuperieure): self
    {
        $this->classeSuperieure = $classeSuperieure;

        return $this;
    }
}
