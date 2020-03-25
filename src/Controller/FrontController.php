<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index()
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/video_list", name="videoList")
     */
    public function videoList()
    {
        return $this->render('front/video_list.html.twig');
    }
}

