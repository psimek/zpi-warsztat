<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Zadanie;

class ZadanieController extends Controller
{
    public function indexAction()
    {
        $zadania = Zadanie::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Zadanie:Index.html.twig', array('zadania' => $zadania));
    }

    public function detailsAction($id)
    {
        $zadanie = Zadanie::getRepo($this)->find($id);

        return $zadanie
             ? $this->render('WarsztatBundle:Zadanie:Details.html.twig', array('zadanie' => $zadanie, 'czesci' => array()))
             : new Response("Nie ma takiego zadania");
    }
}
