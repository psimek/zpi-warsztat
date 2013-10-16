<?php

namespace ZPI\WarsztatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use ZPI\WarsztatBundle\Entity\Gwarancja;

class GwarancjaController extends Controller
{
    public function indexAction()
    {
        $gwarancje = Gwarancja::getRepo($this)->findAll();

        return $this->render('WarsztatBundle:Gwarancja:Index.html.twig', array('gwarancje' => $gwarancje));
    }

    public function detailsAction($id)
    {
        $gwarancje[] = Gwarancja::getRepo($this)->find($id);

        return $gwarancje[0]
             ? $this->render('WarsztatBundle:Gwarancja:Index.html.twig', array('gwarancje' => $gwarancje))
             : new Response("Nie ma takiej gwarancji");
    }
}
