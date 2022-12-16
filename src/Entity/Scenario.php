<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScenarioRepository")
 */
class Scenario
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
    private $nomScenario;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbJoueurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveau;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationScenario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jeu", inversedBy="scenarios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jeu;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PostScenario", mappedBy="scenario", orphanRemoval=true)
     */
    private $posts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->creationScenario = new \DateTime();
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomScenario(): ?string
    {
        return $this->nomScenario;
    }

    public function setNomScenario(string $nomScenario): self
    {
        $this->nomScenario = $nomScenario;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNbJoueurs(): ?int
    {
        return $this->nbJoueurs;
    }

    public function setNbJoueurs(int $nbJoueurs): self
    {
        $this->nbJoueurs = $nbJoueurs;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getCreationScenario(): ?\DateTimeInterface
    {
        return $this->creationScenario;
    }

    public function setCreationScenario(\DateTimeInterface $creationScenario): self
    {
        $this->creationScenario = $creationScenario;

        return $this;
    }

    public function getJeu(): ?Jeu
    {
        return $this->jeu;
    }

    public function setJeu(?Jeu $jeu): self
    {
        $this->jeu = $jeu;

        return $this;
    }

    /**
     * @return Collection|PostScenario[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(PostScenario $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->setScenario($this);
        }

        return $this;
    }

    public function removePost(PostScenario $post): self
    {
        if ($this->posts->contains($post)) {
            $this->posts->removeElement($post);
            // set the owning side to null (unless already changed)
            if ($post->getScenario() === $this) {
                $post->setScenario(null);
            }
        }

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
