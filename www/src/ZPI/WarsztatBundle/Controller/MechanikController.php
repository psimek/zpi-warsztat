<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Mechanik;

class MechanikController extends Controller
{
    public function indexAction()
    {
        $mechanicy = Mechanik::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Mechanik:Index.html.twig', array('mechanicy' => $mechanicy));
    }

    public function detailsAction($id)
    {
        $mechanicy[] = Mechanik::getRepo($this)->find($id);

        return $mechanicy[0]
             ? $this->render('WarsztatBundle:Mechanik:Index.html.twig', array('mechanicy' => $mechanicy))
             : new Response("Nie ma takiego mechanika");
    }
}
