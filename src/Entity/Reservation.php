<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Promos;
use App\Entity\Salle;
use App\Entity\Matiere;
use App\Entity\Enseignant;
use Doctrine\ORM\Query\Parameter;



#[Route('/reservation')]
final class ReservationController extends AbstractController
{
    #[Route(name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // copier l code
        $promotions = $entityManager->getRepository(Promos::class)->find($reservation->getPromos()->getId());
        $salle = $entityManager->getRepository(Salle::class)->find($reservation->getSalle()->getId());
        $enseignant = $entityManager->getRepository(Enseignant::class)->find($reservation->getEnseignant()->getId());
        $jour = $reservation->getJour();
        $heur_deb = $reservation->getHeurDeb();
        $heur_fin = $reservation->getHeurFin();

// Check if the room is free for the teacher, promos, and salle on the same date and time range
        $parameters = new ArrayCollection([
            new Parameter('salle', $salle),
            new Parameter('promos', $promotions),
            new Parameter('enseignant', $enseignant),
            new Parameter('jour', $jour),
            new Parameter('heurDeb', $heur_deb),
            new Parameter('heurFin', $heur_fin),
        ]);

        $conflictingReservation = $entityManager->getRepository(Reservation::class)->createQueryBuilder('r')
            ->where('r.salle = :salle')
            ->orWhere('r.promos = :promos')
            ->orWhere('r.enseignant = :enseignant')
            ->andWhere('r.jour = :jour')
            ->andWhere('r.heur_deb < :heurFin AND r.heur_fin > :heurDeb') // Check for overlapping times
            ->setParameters($parameters)
            ->getQuery()
            ->getOneOrNullResult();


        if ($conflictingReservation) {
            return new Response('Cette salle est déjà réservée pour ce créneau!', 400);
        }

        // If no conflicts, proceed with saving the reservation
        //$reservation->setSalle($salle);
        //$reservation->setPromos($promotions);
        //$reservation->setEnseignant($enseignant);

        $entityManager->persist($reservation);
        $entityManager->flush();

        //return new Response('Réservation effectuée avec succès!');

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $promotions = $entityManager->getRepository(Promos::class)->find($reservation->getPromos()->getId());
            $salle = $entityManager->getRepository(Salle::class)->find($reservation->getSalle()->getId());
            $enseignant = $entityManager->getRepository(Enseignant::class)->find($reservation->getEnseignant()->getId());
            $jour = $reservation->getJour();
            $heur_deb = $reservation->getHeurDeb();
            $heur_fin = $reservation->getHeurFin();
            // copier l code
            $promotions = $entityManager->getRepository(Promos::class)->find($reservation->getPromos()->getId());
            $salle = $entityManager->getRepository(Salle::class)->find($reservation->getSalle()->getId());
            $enseignant = $entityManager->getRepository(Enseignant::class)->find($reservation->getEnseignant()->getId());
            $jour = $reservation->getJour();
            $heur_deb = $reservation->getHeurDeb();
            $heur_fin = $reservation->getHeurFin();

// Check if the room is free for the teacher, promos, and salle on the same date and time range
            $parameters = new ArrayCollection([
                new Parameter('salle', $salle),
                new Parameter('promos', $promotions),
                new Parameter('enseignant', $enseignant),
                new Parameter('jour', $jour),
                new Parameter('heurDeb', $heur_deb),
                new Parameter('heurFin', $heur_fin),
            ]);

            $conflictingReservation = $entityManager->getRepository(Reservation::class)->createQueryBuilder('r')
                ->where('r.salle = :salle')
                ->orWhere('r.promos = :promos')
                ->orWhere('r.enseignant = :enseignant')
                ->andWhere('r.jour = :jour')
                ->andWhere('r.heurDeb < :heurFin AND r.heurFin > :heurDeb') // Check for overlapping times
                ->setParameters($parameters)
                ->getQuery()
                ->getOneOrNullResult();



            if ($conflictingReservation) {
                return new Response('Cette salle est déjà réservée pour ce créneau!', 400);
            }

            // If no conflicts, proceed with saving the reservation
            //$reservation->setSalle($salle);
            //$reservation->setPromos($promotions);
            //$reservation->setEnseignant($enseignant);

            $entityManager->persist($reservation);
            $entityManager->flush();

            //return new Response('Réservation effectuée avec succès!');

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
