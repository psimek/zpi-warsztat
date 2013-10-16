<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Pojazd;

class PojazdController extends Controller
{
    public function indexAction()
    {
        $pojazdy = Pojazd::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Pojazd:Index.html.twig', array('pojazdy' => $pojazdy));
    }

    public function detailsAction($id)
    {
        $pojazdy[] = Pojazd::getRepo($this)->find($id);

        $zlecenia = $pojazdy[0]->getZlecenia();

        return $pojazdy[0]
             ? $this->render('WarsztatBundle:Pojazd:Details.html.twig', array('pojazdy' => $pojazdy, 'zlecenia' => $zlecenia))
             : new Response("Nie ma takiego pojazdu");
    }

    public function editAction($id)
    {
        $id = (int) $id;

        if (!($id > 0 && $pojazd = Pojazd::getRepo($this)->find($id)))
            $pojazd = new Pojazd();

        $form = $this->createFormBuilder($pojazd)
                ->add('nazwa', 'text')
                ->add('save', 'submit')
                ->getForm();

        $form->handleRequest($this->getRequest());

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pojazd);
            $em->flush();

            return $this->redirect($this->generateUrl('pojazd_details', array('id' => $pojazd->getId())));
        }

        return $this->render('WarsztatBundle:Pojazd:Edit.html.twig', array('form' => $form->createView()));
    }
}
