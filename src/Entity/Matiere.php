<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_matiere = null;

    /**
     * @var Collection<int, Enseigne>
     */
    #[ORM\OneToMany(targetEntity: Enseigne::class, mappedBy: 'matiere', orphanRemoval: true)]
    private Collection $enseignes;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'matiere')]
    private Collection $reservations;

    public function __construct()
    {
        $this->enseignes = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMatiere(): ?string
    {
        return $this->nom_matiere;
    }

    public function setNomMatiere(string $nom_matiere): static
    {
        $this->nom_matiere = $nom_matiere;

        return $this;
    }

    /**
     * @return Collection<int, Enseigne>
     */
    public function getEnseignes(): Collection
    {
        return $this->enseignes;
    }

    public function addEnseigne(Enseigne $enseigne): static
    {
        if (!$this->enseignes->contains($enseigne)) {
            $this->enseignes->add($enseigne);
            $enseigne->setMatiere($this);
        }

        return $this;
    }

    public function removeEnseigne(Enseigne $enseigne): static
    {
        if ($this->enseignes->removeElement($enseigne)) {
            // set the owning side to null (unless already changed)
            if ($enseigne->getMatiere() === $this) {
                $enseigne->setMatiere(null);
            }
        }

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
            $reservation->setMatiere($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getMatiere() === $this) {
                $reservation->setMatiere(null);
            }
        }

        return $this;
    }
}
