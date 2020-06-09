<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListsRepository")
 */
class Lists
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     *
     */
    private $user_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $shared;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ListFilms", mappedBy="List_id")
     */
    private $listFilms;


    public function __construct()
    {
        $this->films = new ArrayCollection();
        $this->listFilms = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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


    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function isShared(): ?bool
    {
        return $this->shared;
    }

    public function setShared(bool $shared): self
    {
        $this->shared = $shared;

        return $this;
    }

    public function getShared(): ?bool
    {
        return $this->shared;
    }



    /**
     * @return Collection|ListFilms[]
     */
    public function getListFilms(): Collection
    {
        return $this->listFilms;
    }

    public function addListFilm(ListFilms $listFilm): self
    {
        if (!$this->listFilms->contains($listFilm)) {
            $this->listFilms[] = $listFilm;
            $listFilm->setList($this);
        }

        return $this;
    }

    public function removeListFilm(ListFilms $listFilm): self
    {
        if ($this->listFilms->contains($listFilm)) {
            $this->listFilms->removeElement($listFilm);
            // set the owning side to null (unless already changed)
            if ($listFilm->getList() === $this) {
                $listFilm->setList(null);
            }
        }

        return $this;
    }
}
