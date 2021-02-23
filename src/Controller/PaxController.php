<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Pax;
use App\Form\GroupType;
use App\Form\PaxType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;




class PaxController extends AbstractController
{
  
      /**
     * @Route("/pax/{id}/{nombrepax}", name="pax")
     */
    public function create(Request $request) {

        $entityManager = $this->getDoctrine()->getManager();
    
            $pax =new Pax();

            $form =$this->createForm(PaxType::class,$pax);
        
            $form->HandleRequest($request);
            $pax->setGroupp($group);
          
            if ($form->isSubmitted() && $form->isValid()) {
            
                $entityManager->persist($group);
                $entityManager->flush();
    
            }
    
    
         return $this->render('pax/pax.html.twig',['formPax' => $form->createView() ]);
          
            
        }
}
