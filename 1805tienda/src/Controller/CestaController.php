<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CestaController extends AbstractController
{
    /**
     * @Route("/cesta", name="cesta")
     */
    public function index()
    {
        return $this->render('cesta/index.html.twig', [
            'controller_name' => 'CestaController',
        ]);
    }
}
