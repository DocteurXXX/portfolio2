<?php

namespace App\Controller;

use App\Entity\Liens;
use App\Form\LiensType;
use App\Repository\LiensRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/liens")
 */
class LiensController extends AbstractController
{
    /**
     * @Route("/", name="liens_index", methods={"GET"})
     */
    public function index(LiensRepository $liensRepository): Response
    {
        return $this->render('liens/index.html.twig', [
            'liens' => $liensRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="liens_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lien = new Liens();
        $form = $this->createForm(LiensType::class, $lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lien);
            $entityManager->flush();

            return $this->redirectToRoute('liens_index');
        }

        return $this->render('liens/new.html.twig', [
            'lien' => $lien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="liens_show", methods={"GET"})
     */
    public function show(Liens $lien): Response
    {
        return $this->render('liens/show.html.twig', [
            'lien' => $lien,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="liens_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Liens $lien): Response
    {
        $form = $this->createForm(LiensType::class, $lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('liens_index');
        }

        return $this->render('liens/edit.html.twig', [
            'lien' => $lien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="liens_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Liens $lien): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lien->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('liens_index');
    }
}
