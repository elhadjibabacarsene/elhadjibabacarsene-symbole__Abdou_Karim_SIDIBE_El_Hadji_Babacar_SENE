<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BatimentController extends AbstractController
{

    /**
     * @Route("/batiment", name="batiment")
     */
    public function index()
    {
        $prenoms = ["Lior"=>31,"Joseph"=>12,"Anta"=>55];

        return $this->render('batiment/index.html.twig', [
            'controller_name' => 'BatimentController',
        ]);
    }
}
