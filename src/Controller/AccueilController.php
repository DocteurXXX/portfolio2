<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/{id}", name="accueil", methods={"GET"})
     */
    public function index(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/index.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/formation/{id}", name="formationpage", methods={"GET"})
     */
    public function formation(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/formation.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/experience/{id}", name="experiencepage", methods={"GET"})
     */
    public function experience(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/experience.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/competence/{id}", name="competencepage", methods={"GET"})
     */
    public function competence(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/competence.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/projet/{id}", name="projetpage", methods={"GET"})
     */
    public function projet(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/projet.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/loisirs/{id}", name="loisirspage", methods={"GET"})
     */
    public function loisirs(UserRepository $userRepository, User $user)
    {
        return $this->render('accueil/loisirs.html.twig', [
            'user' => $user,
        ]);
    }
}
