<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Dostawca;

class DostawcaController extends Controller
{
    public function indexAction()
    {
        $dostawcy = Dostawca::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Dostawca:Index.html.twig', array('dostawcy' => $dostawcy));
    }

    public function detailsAction($id)
    {
        $dostawcy[] = Dostawca::getRepo($this)->find($id);

        return $dostawcy[0]
             ? $this->render('WarsztatBundle:Dostawca:Index.html.twig', array('dostawcy' => $dostawcy))
             : new Response("Nie ma takiego dostawcy");
    }
}
