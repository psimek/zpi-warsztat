<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Zlecenie;

class ZlecenieController extends Controller
{
    public function indexAction()
    {
        $zlecenia = Zlecenie::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Zlecenie:Index.html.twig', array('zlecenia' => $zlecenia));
    }

    public function detailsAction($id)
    {
        $zlecenia[] = Zlecenie::getRepo($this)->find($id);

        $zadania = $zlecenia[0]->getZadania();

        return $zlecenia[0]
             ? $this->render('WarsztatBundle:Zlecenie:Details.html.twig', array('zlecenia' => $zlecenia, 'zadania' => $zadania))
             : new Response("Nie ma takiego zlecenia");
    }

    public function editAction($id)
    {
        $id = (int) $id;

        if (!($id > 0 && $zlecenie = Zlecenie::getRepo($this)->find($id)))
            $zlecenie = new Zlecenie();

        $form = $this->createFormBuilder($zlecenie)
                ->add('klient', 'entity', array('class' => 'WarsztatBundle:Klient', 'property' => 'imie'))
                ->add('pojazd', 'entity', array('class' => 'WarsztatBundle:Pojazd', 'property' => 'nazwa'))
                ->add('save', 'submit')
                ->getForm();

        $form->handleRequest($this->getRequest());

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($zlecenie);
            $em->flush();

            return $this->redirect($this->generateUrl('zlecenie_details', array('id' => $zlecenie->getId())));
        }

        return $this->render('WarsztatBundle:Zlecenie:Edit.html.twig', array('form' => $form->createView()));
    }
}
