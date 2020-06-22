<?php

namespace App\Controller;

use App\Entity\Blog3;
use App\Form\Blog3Type;
use App\Repository\Blog3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog3")
 */
class Blog3Controller extends AbstractController
{
    /**
     * @Route("/", name="blog3_index", methods={"GET"})
     */
    public function index(Blog3Repository $blog3Repository): Response
    {
        return $this->render('blog3/index.html.twig', [
            'blog3s' => $blog3Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="blog3_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blog3 = new Blog3();
        $form = $this->createForm(Blog3Type::class, $blog3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blog3);
            $entityManager->flush();

            return $this->redirectToRoute('blog3_index');
        }

        return $this->render('blog3/new.html.twig', [
            'blog3' => $blog3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blog3_show", methods={"GET"})
     */
    public function show(Blog3 $blog3): Response
    {
        return $this->render('blog3/show.html.twig', [
            'blog3' => $blog3,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="blog3_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blog3 $blog3): Response
    {
        $form = $this->createForm(Blog3Type::class, $blog3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blog3_index');
        }

        return $this->render('blog3/edit.html.twig', [
            'blog3' => $blog3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blog3_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Blog3 $blog3): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blog3->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blog3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('blog3_index');
    }
}
