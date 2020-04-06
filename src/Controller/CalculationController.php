<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculationController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function main()
    {
        return $this->render('calculation/index.html.twig', [
            'controller_name' => 'CalculationController',
        ]);
    }

    /**
     * @Route("/calculation", name="calculation")
     */
    public function calculation()
    {
        return $this->render('calculation/index.html.twig', [
            'controller_name' => 'CalculationController',
        ]);
    }
}
