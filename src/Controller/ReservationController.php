<?php

namespace App\Controller;

use App\Entity\Pax;
use App\Entity\Group;
use App\Entity\Chambre;
use App\Entity\Tranche;
use App\Form\PaxType;
use App\Form\ChambreType;
use App\Form\TrancheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;




class ReservationController extends AbstractController
{
  

     /**
     * @Route("/", name="home")
     */
    public function typech(Request $request) {

        $entityManager = $this->getDoctrine()->getManager();
         $chambre = new Chambre();
        

        $form =$this->createForm(ChambreType::class,$chambre);
       
            
        
            $form->HandleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
            
                $entityManager->persist($chambre);
                $entityManager->flush();
    
                return $this->redirectToRoute('pax');
    
            }
    
    
            return $this->render('reservation/index.html.twig',
                            ['formChambre' => $form->createView() ]
                            );
          
            
        }
         /**
         * @Route("/", name="home")
         */
        public function addpax(Request $request) {

            $entityManager = $this->getDoctrine()->getManager();
             $pax = new Pax();
            
    
            $form =$this->createForm(PaxType::class,$pax);
           
                
            
                $form->HandleRequest($request);
        
                if ($form->isSubmitted() && $form->isValid()) {
                
                    $entityManager->persist($pax);
                    $entityManager->flush();
        
                    return $this->redirectToRoute('pax');
        
                }
        
        
                return $this->render('reservation/index.html.twig',
                                ['formPax' => $form->createView() ]
                                );
              
                
            }
           
              
   
}
