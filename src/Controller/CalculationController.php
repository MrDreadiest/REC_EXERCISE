<?php

namespace App\Controller;

use App\Entity\Calculation;
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
     * @Route("/calculation/{n}", name="calculation")
     */
    public function calculation($n)
    {
        /** @var array $outputArray */
        $outputArray = [];

        $calculation = new Calculation($n);
        $calculation->calculate();
        $outputArray[] = $calculation->getMaxOccurrence();

        return $this->render('calculation/index.html.twig', [
            'outputArray' => $outputArray,
        ]);
    }
}
