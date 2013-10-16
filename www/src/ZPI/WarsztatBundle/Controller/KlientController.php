<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Klient;

class KlientController extends Controller
{
    public function indexAction()
    {
        $klienci = Klient::getRepo($this)->findBy(array(), array('id'=>'asc'));

        return $this->render('WarsztatBundle:Klient:Index.html.twig', array('klienci' => $klienci));
    }

    public function detailsAction($id)
    {
        $klienci[] = Klient::getRepo($this)->find($id);

        $zlecenia = $klienci[0]->getZlecenia();

        return $klienci[0]
             ? $this->render('WarsztatBundle:Klient:Details.html.twig', array('klienci' => $klienci, 'zlecenia' => $zlecenia))
             : new Response("Nie ma takiego klienta");
    }

    public function editAction($id)
    {
        $id = (int) $id;

        if (!($id > 0 && $klient = Klient::getRepo($this)->find($id)))
            $klient = new Klient();

        $form = $this->createFormBuilder($klient)
                ->add('imie', 'text')
                ->add('nazwisko', 'text')
                ->add('email', 'text')
                ->add('save', 'submit')
                ->getForm();

        $form->handleRequest($this->getRequest());

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($klient);
            $em->flush();

            return $this->redirect($this->generateUrl('klient_details', array('id' => $klient->getId())));
        }

        return $this->render('WarsztatBundle:Klient:Edit.html.twig', array('form' => $form->createView()));
    }
}
