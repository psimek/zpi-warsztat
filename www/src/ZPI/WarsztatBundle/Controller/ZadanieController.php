<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Czesc;
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
        $zadania[] = Zadanie::getRepo($this)->find($id);

        $czesci = Czesc::getRepo($this)->find($id);
        //$czesci =

        return $zadania[0]
             ? $this->render('WarsztatBundle:Zadanie:Details.html.twig', array('zadania' => $zadania, 'czesci' => $czesci))
             : new Response("Nie ma takiego zadania");
    }
}
