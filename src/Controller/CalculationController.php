<?php

namespace App\Controller;

use App\Entity\Calculation;
use App\Form\CalculationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculationController extends AbstractController
{

    /**
     * @Route("", name="calculation")
     * @param Request $request
     * @return Response
     */
    public function calculation(Request $request)
    {
        /** @var array $outputArray */
        $outputArray = [];

        /** @var CalculationType $form */
        $form = $this->createForm(CalculationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($form->getData() as $key => $value) {
                if ($value) {
                    $calculation = new Calculation($value);
                    $calculation->calculate();
                    $outputArray[] = [$key, $value, $calculation->getMaxOccurrence()];
                }
            }
        }

        return $this->render('calculation/index.html.twig', [
            'form' => $form->createView(),
            'outputArray' => $outputArray,
        ]);
    }
}
