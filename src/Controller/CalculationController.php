<?php

namespace App\Controller;

use Doctrine\Common\Collections\ArrayCollection;
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
        $outputArray = new ArrayCollection([0, 1]);
        $maxOccurrence = PHP_INT_MIN;

        if (2 > $n) $maxOccurrence = $outputArray[$n];
        else {
            for ($i = 2; $i <= $n; $i++) {

                if (0 == $i % 2) {
                    $outputArray->add($outputArray[$i / 2]);
                }
                elseif (1 == $i % 2) {
                    $outputArray->add($outputArray[$i / 2] + $outputArray[($i / 2) + 1]);
                }
                if ($outputArray[$i] > $maxOccurrence) $maxOccurrence = $outputArray[$i];
            }
        }

        return $this->render('calculation/index.html.twig', [
            'maxOccurrence' => $maxOccurrence,
        ]);
    }
}
