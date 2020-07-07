<?php

namespace App\Controller;

use App\Repository\EtudiantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Component\HttpFoundation\Response;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="listetudiant")
     */
    public function index()
    {
        return $this->render('etudiant/index.html.twig');
    }

    /**
     * Permet d'afficher toute la liste
     * @param EtudiantRepository $etudiantRepository
     *@Route("/alllistetudiant",options={"expose"=true}, name="alllistetudiant")
     */
    public function allEtudiant(EtudiantRepository $etudiantRepository, Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $limit = $request->request->get('limit');
            $offset = $request->request->get('offset');
            $etudiants = $etudiantRepository->findBy(
                array(),
                array(),
                $limit,
                $offset
            );
            return $this->json($etudiants);
        }else{
            throw new \Exception("Aucune requête ajax n'est détecter");
        }
    }

  /**
     * @param Request $request
     * @param EtudiantRepository $etudiantRepository
     * @Route("/etudiant/update,options={"expose"=true},name="updateetudiant")
     */
    /*public function updateEtudiant(Request $request,EtudiantRepository $etudiantRepository)
    {

    }*/
}
