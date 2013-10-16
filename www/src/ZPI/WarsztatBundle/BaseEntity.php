<?php

namespace ZPI\WarsztatBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class BaseEntity
{
    public static function getRepo(Controller $controller)
    {
        $class = explode('\\', get_called_class());

        return $controller
               ->getDoctrine()
               ->getRepository('WarsztatBundle:'.end($class));
    }
}
