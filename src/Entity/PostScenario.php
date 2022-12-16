<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostScenarioRepository")
 */
class PostScenario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $messagePostScenario;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationPostScenario;

    /**
     * @ORM\Column(type="integer")
     */
    private $noteScenario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Scenario", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $scenario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function __construct()
    {
        $this->creationPostScenario = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessagePostScenario(): ?string
    {
        return $this->messagePostScenario;
    }

    public function setMessagePostScenario(string $messagePostScenario): self
    {
        $this->messagePostScenario = $messagePostScenario;

        return $this;
    }

    public function getCreationPostScenario(): ?\DateTimeInterface
    {
        return $this->creationPostScenario;
    }

    public function setCreationPostScenario(\DateTimeInterface $creationPostScenario): self
    {
        $this->creationPostScenario = $creationPostScenario;

        return $this;
    }

    public function getNoteScenario(): ?int
    {
        return $this->noteScenario;
    }

    public function setNoteScenario(int $noteScenario): self
    {
        $this->noteScenario = $noteScenario;

        return $this;
    }

    public function getScenario(): ?Scenario
    {
        return $this->scenario;
    }

    public function setScenario(?Scenario $scenario): self
    {
        $this->scenario = $scenario;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
