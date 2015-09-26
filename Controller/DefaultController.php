<?php

namespace Clarity\YandexDirectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ClarityYandexDirectBundle:Default:index.html.twig', array('name' => $name));
    }
}
