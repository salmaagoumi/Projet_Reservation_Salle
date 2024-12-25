<?php

namespace App\Entity;

use App\Repository\EnseignantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantRepository::class)]
class Enseignant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    /**
     * @var Collection<int, Enseigne>
     */
    #[ORM\OneToMany(targetEntity: Enseigne::class, mappedBy: 'enseignant', orphanRemoval: true)]
    private Collection $enseignes;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'enseignant')]
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

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
            $enseigne->setEnseignant($this);
        }

        return $this;
    }

    public function removeEnseigne(Enseigne $enseigne): static
    {
        if ($this->enseignes->removeElement($enseigne)) {
            // set the owning side to null (unless already changed)
            if ($enseigne->getEnseignant() === $this) {
                $enseigne->setEnseignant(null);
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
            $reservation->setEnseignant($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getEnseignant() === $this) {
                $reservation->setEnseignant(null);
            }
        }

        return $this;
    }
}
