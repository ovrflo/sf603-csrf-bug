<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'test')]
    public function index(): Response
    {
        $form = $this->createFormBuilder([])
            ->add('field1')
            ->add('field2')
            ->add('submit', SubmitType::class)
            ->getForm()
        ;
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'form' => $form->createView(),
        ]);
    }
}
