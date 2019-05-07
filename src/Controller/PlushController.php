<?php

namespace App\Controller;

use App\Entity\Plush;
use App\Repository\PlushRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlushController extends AbstractController
{

    /**
     * @var PlushRepository
     */
    private $repository;

    public function __construct(PlushRepository $repository){
        $this->repository = $repository;
    }

    /**
     * @Route("/plush", name="plush")
     */
    public function index()
    {
        $plushie =  $this->repository->findAll();

        return $this->render('plush/index.html.twig', [
            'plushie' => $plushie,
        ]);
    }

    /**
     * @Route("/plush/{id}", name="plush_show")
     */
    public function show(int $id)
    {
        $plush = $this->repository->find($id);

        return $this->render('plush/show.html.twig', [
            'plush' => $plush,
        ]);
    }
    

}
