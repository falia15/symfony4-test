<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Plush", mappedBy="category_id")
     */
    private $plushes;

    public function __construct()
    {
        $this->plushes = new ArrayCollection();
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

    /**
     * @return Collection|Plush[]
     */
    public function getPlushes(): Collection
    {
        return $this->plushes;
    }

    public function addPlush(Plush $plush): self
    {
        if (!$this->plushes->contains($plush)) {
            $this->plushes[] = $plush;
            $plush->setCategoryId($this);
        }

        return $this;
    }

    public function removePlush(Plush $plush): self
    {
        if ($this->plushes->contains($plush)) {
            $this->plushes->removeElement($plush);
            // set the owning side to null (unless already changed)
            if ($plush->getCategoryId() === $this) {
                $plush->setCategoryId(null);
            }
        }

        return $this;
    }
}
