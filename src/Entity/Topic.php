<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TopicRepository")
 */
class Topic
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
    private $nomTopic;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationTopic;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jeu", inversedBy="topics")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jeu;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PostTopic", mappedBy="topic", orphanRemoval=true)
     */
    private $posts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->creationTopic = new \DateTime();
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTopic(): ?string
    {
        return $this->nomTopic;
    }

    public function setNomTopic(string $nomTopic): self
    {
        $this->nomTopic = $nomTopic;

        return $this;
    }

    public function getCreationTopic(): ?\DateTimeInterface
    {
        return $this->creationTopic;
    }

    public function setCreationTopic(\DateTimeInterface $creationTopic): self
    {
        $this->creationTopic = $creationTopic;

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
     * @return Collection|PostTopic[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(PostTopic $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->setTopic($this);
        }

        return $this;
    }

    public function removePost(PostTopic $post): self
    {
        if ($this->posts->contains($post)) {
            $this->posts->removeElement($post);
            // set the owning side to null (unless already changed)
            if ($post->getTopic() === $this) {
                $post->setTopic(null);
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
