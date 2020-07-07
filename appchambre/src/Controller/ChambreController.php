<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\AddChambreType;
use App\Repository\ChambreRepository;
use App\Repository\TypeChambreRepository;
use Doctrine\Common\Persistence\ObjectManager;
use MongoDB\Driver\Manager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(TypeChambreRepository $typeChambreRepository)
    {
        $typeChambres = $typeChambreRepository->findAll();
        //dd($typeChambres);
        return $this->render('chambre/index.html.twig');
    }



    /**
     * @Route("/chambre/addchambre", name="addchambre")
     */
    public function addChambre(Request $request)
    {
        $chambre = new Chambre();

        $form = $this->createForm(AddChambreType::class,$chambre);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
                $em = $this->getDoctrine()->getManager();
                $em->persist($chambre);
                $em->flush();
                //Affichage du flash
                $this->addFlash('success',"La nouvelle chambre {$chambre->getNumero()} est enregistrée ! ");

                return $this->redirectToRoute('addchambre');
        }

        return $this->render('chambre/index.html.twig', ['form'=>$form->createView()]);
    }

    /**
     * Permet de générer le numéro unique par chambre
     * @Route("/chambre/generernumerochambre", options={"expose"=true}, name="generernumerochambre")
     */
    public function getNewNumeroChambre(Request $request,ChambreRepository $chambreRepository)
    {
        if($request->isXmlHttpRequest())
        {
            $value = $request->request->get('value');
            //On génére le numéro unique de la chambre
            $newIdChambre = $this->genererNewIdChambre($chambreRepository);
            //On génére le numéro du batiment
            $newNumBatiment = $this->traitementNumeroBatiment($value);

            //On générer le numero complet finale de la chambre
            $numeroChambre = $newNumBatiment.'-'.$newIdChambre;
            return $this->json($numeroChambre);
        }
    }

    /**
     * Permet de générer automtiquement le nouveau numéro de la chambre à partir du dernier ID
     * @param $value
     * @param ChambreRepository $chambreRepository
     * @return int
     */
    private function genererNewIdChambre($chambreRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $lastQuestion = $chambreRepository->findOneBy([], ['id' => 'desc']);
        $lastId = $lastQuestion->getId();

        $numIdChambre = $lastId+1;

        $taille = strlen($numIdChambre);
        if($taille===1)
        {
            $numero = "00".$numIdChambre;
        }elseif ($taille===2)
        {
            $numero = "0".$numIdChambre;
        }
        return $numero;
    }

    /**
     * Permet de d'ajouter les zéro devant l'id batiment
     * @param $idBatiment
     * @return string
     */
    private function traitementNumeroBatiment($idBatiment)
    {
        $numUnique = "";
        if($idBatiment<=9)
        {
            $numUnique = "000".$idBatiment;
        }elseif ($idBatiment>9 && $idBatiment<=99)
        {
            $numUnique = "00".$idBatiment;
        }elseif($idBatiment>99&&$idBatiment<=999)
        {
            $numUnique = "0".$idBatiment;
        }elseif ($idBatiment>999&&$idBatiment<=9999)
        {
            $numUnique = $idBatiment;
        }
        return $numUnique;
    }
}
