<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostTopicRepository")
 */
class PostTopic
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
    private $messagePostTopic;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationPostTopic;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Topic", inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $topic;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function __construct()
    {
        $this->creationPostTopic = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessagePostTopic(): ?string
    {
        return $this->messagePostTopic;
    }

    public function setMessagePostTopic(string $messagePostTopic): self
    {
        $this->messagePostTopic = $messagePostTopic;

        return $this;
    }

    public function getCreationPostTopic(): ?\DateTimeInterface
    {
        return $this->creationPostTopic;
    }

    public function setCreationPostTopic(\DateTimeInterface $creationPostTopic): self
    {
        $this->creationPostTopic = $creationPostTopic;

        return $this;
    }

    public function getTopic(): ?Topic
    {
        return $this->topic;
    }

    public function setTopic(?Topic $topic): self
    {
        $this->topic = $topic;

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
