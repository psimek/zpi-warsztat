<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Pensja;

class PensjaController extends Controller
{
    public function indexAction()
    {
        $pensje = Pensja::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Pensja:Index.html.twig', array('pensje' => $pensje));
    }

    public function detailsAction($id)
    {
        $pensje[] = Pensja::getRepo($this)->find($id);

        return $pensje[0]
             ? $this->render('WarsztatBundle:Pensja:Index.html.twig', array('pensje' => $pensje))
             : new Response("Nie ma takiej pensji");
    }
}
