<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\ListaZakupow;

class ListaZakupowController extends Controller
{
    public function indexAction()
    {
        $listy = ListaZakupow::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:ListaZakupow:Index.html.twig', array('listy' => $listy));
    }

    public function detailsAction($id)
    {
        $listy[] = ListaZakupow::getRepo($this)->find($id);

        return $listy[0]
             ? $this->render('WarsztatBundle:ListaZakupow:Index.html.twig', array('listy' => $listy))
             : new Response("Nie ma takiej listy zakupów");
    }
}
