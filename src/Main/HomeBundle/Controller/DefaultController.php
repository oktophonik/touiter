<?php

namespace Main\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainHomeBundle:Default:index.html.twig', array('name' => 'Home'));
    }
}
