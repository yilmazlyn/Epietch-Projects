<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListFilmsRepository")
 */
class ListFilms
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
    private $film_id;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lists", inversedBy="listFilms")
     * @ORM\JoinColumn(referencedColumnName="id",nullable=false)
     */
    private $List_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilmId(): ?int
    {
        return $this->film_id;
    }

    public function setFilmId(int $film_id): self
    {
        $this->film_id = $film_id;

        return $this;
    }



    public function getListId(): ?Lists
    {
        return $this->List;
    }

    public function setListId(?Lists $List): self
    {
        $this->List_id = $List;

        return $this;
    }
}