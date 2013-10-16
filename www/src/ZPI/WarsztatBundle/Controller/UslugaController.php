<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Usluga;

class UslugaController extends Controller
{
    public function indexAction()
    {
        $uslugi = Usluga::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Usluga:Index.html.twig', array('uslugi' => $uslugi));
    }

    public function detailsAction($id)
    {
        $uslugi[] = Usluga::getRepo($this)->find($id);

        return $uslugi[0]
             ? $this->render('WarsztatBundle:Usluga:Index.html.twig', array('uslugi' => $uslugi))
             : new Response("Nie ma takiej usługi");
    }
}
