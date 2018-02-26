<?php

namespace AllForKids\MainBundle\Controller;

use AllForKids\MainBundle\Entity\evenement;
use AllForKids\MainBundle\Entity\Reservation;
use AllForKids\MainBundle\Form\evenementType;
use AllForKids\MainBundle\Form\nombreTicketType;
use AllForKids\MainBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{


    public function ListerReservationAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reserv=$em->getRepository("AllForKidsMainBundle:Reservation")->findAll();
        return $this->render('@AllForKidsMain/Reservation/ListeReservation.html.twig',
            array(
                'reservation'=>$reserv
            ));

    }




    public function reservAction(Request $request, $id_even)
    {
        $dr = new Reservation();
        $em = $this->getDoctrine()->getManager();


        $x = $this->getUser()->getId();
        if ($request->isMethod('post')) {

            $em = $this->getDoctrine()->getManager();


            $dd = $em->getRepository('AllForKidsMainBundle:evenement')->find($id_even);

            if ($dd->getTicketDisponible() > 0) {

                $dr->setNbreTicket($request->get('nbr'));
                // $hh = $form->get('nbreTicket')->getData();
                $dr->setIdClient($x);
                $dr->setDateReservation(new \DateTime('now'));

                $dr->setIdEven($dd->getIdEven());

                $em->persist($dr);

                $em->flush();

                //  $pers=$em->getRepository('MyAppUserBundle:User')->findOneBy(['id'=>$dd->getIdUser()]);
                return $this->redirectToRoute('listeEven');
            } else {

                return $this->redirectToRoute('listeEven');
            }

        }
    }




   }
