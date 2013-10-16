<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Czesc;

class CzescController extends Controller
{
    public function indexAction()
    {
        $czesci = Czesc::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Czesc:Index.html.twig', array('czesci' => $czesci));
    }

    public function detailsAction($id)
    {
        $czesci[] = Czesc::getRepo($this)->find($id);

        $dostawcy = $czesci[0]->getDostawcy();

        return $czesci[0]
             ? $this->render('WarsztatBundle:Czesc:Details.html.twig', array('czesci' => $czesci, 'dostawcy' => $dostawcy))
             : new Response("Nie ma takiej części");
    }
}
