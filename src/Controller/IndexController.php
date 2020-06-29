<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\Blog3Repository;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Blog3Repository $blog3Repository): Response
    {
        return $this->render('index/index.html.twig', [
            'blog3' => $blog3Repository->findAll(),
        ]);
    }}
