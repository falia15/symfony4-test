<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlushController extends AbstractController
{
    /**
     * @Route("/plush", name="plush")
     */
    public function index()
    {
        return $this->render('plush/index.html.twig', [
            'controller_name' => 'PlushController',
        ]);
    }
}
