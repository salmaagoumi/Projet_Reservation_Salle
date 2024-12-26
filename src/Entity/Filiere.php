<?php

namespace App\Entity;

use App\Repository\FiliereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiliereRepository::class)]
class Filiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_filiere = null;

    /**
     * @var Collection<int, Promos>
     */
    #[ORM\OneToMany(targetEntity: Promos::class, mappedBy: 'filiere', orphanRemoval: true)]
    private Collection $promos;

    public function __construct()
    {
        $this->promos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFiliere(): ?string
    {
        return $this->nom_filiere;
    }

    public function setNomFiliere(string $nom_filiere): static
    {
        $this->nom_filiere = $nom_filiere;

        return $this;
    }

    /**
     * @return Collection<int, Promos>
     */
    public function getPromos(): Collection
    {
        return $this->promos;
    }

    public function addPromo(Promos $promo): static
    {
        if (!$this->promos->contains($promo)) {
            $this->promos->add($promo);
            $promo->setFiliere($this);
        }

        return $this;
    }

    public function removePromo(Promos $promo): static
    {
        if ($this->promos->removeElement($promo)) {
            // set the owning side to null (unless already changed)
            if ($promo->getFiliere() === $this) {
                $promo->setFiliere(null);
            }
        }

        return $this;
    }
}
