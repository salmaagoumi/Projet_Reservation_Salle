<?php

namespace App\Entity;

use App\Repository\PromosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromosRepository::class)]
class Promos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_promos = null;

    #[ORM\Column]
    private ?int $nbr_eleves = null;

    #[ORM\ManyToOne(inversedBy: 'promos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Filiere $filiere = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'promos')]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPromos(): ?string
    {
        return $this->nom_promos;
    }

    public function setNomPromos(string $nom_promos): static
    {
        $this->nom_promos = $nom_promos;

        return $this;
    }

    public function getNbrEleves(): ?int
    {
        return $this->nbr_eleves;
    }

    public function setNbrEleves(int $nbr_eleves): static
    {
        $this->nbr_eleves = $nbr_eleves;

        return $this;
    }

    public function getFiliere(): ?Filiere
    {
        return $this->filiere;
    }

    public function setFiliere(?Filiere $filiere): static
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setPromos($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getPromos() === $this) {
                $reservation->setPromos(null);
            }
        }

        return $this;
    }
}
