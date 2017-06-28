<?php

namespace BdFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BdFrontBundle:Default:index.html.twig');
    }
}
