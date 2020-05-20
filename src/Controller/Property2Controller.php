<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Property2Controller extends AbstractController{

    /**
     * @Route("/biens2",name="property.index2")
     * @return Response
     */
    public function index() : Response
        {
            return $this->render('property/index2.html.twig',[
                'current_menu' => 'properties'
            ]);
        }
}