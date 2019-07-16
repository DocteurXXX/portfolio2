<?php

namespace App\Controller;

use App\Entity\Langues;
use App\Form\LanguesType;
use App\Repository\LanguesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/langues")
 */
class LanguesController extends AbstractController
{
    /**
     * @Route("/", name="langues_index", methods={"GET"})
     */
    public function index(LanguesRepository $languesRepository): Response
    {
        return $this->render('langues/index.html.twig', [
            'langues' => $languesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="langues_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $langue = new Langues();
        $form = $this->createForm(LanguesType::class, $langue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($langue);
            $entityManager->flush();

            return $this->redirectToRoute('langues_index');
        }

        return $this->render('langues/new.html.twig', [
            'langue' => $langue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="langues_show", methods={"GET"})
     */
    public function show(Langues $langue): Response
    {
        return $this->render('langues/show.html.twig', [
            'langue' => $langue,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="langues_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Langues $langue): Response
    {
        $form = $this->createForm(LanguesType::class, $langue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('langues_index');
        }

        return $this->render('langues/edit.html.twig', [
            'langue' => $langue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="langues_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Langues $langue): Response
    {
        if ($this->isCsrfTokenValid('delete'.$langue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($langue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('langues_index');
    }
}
