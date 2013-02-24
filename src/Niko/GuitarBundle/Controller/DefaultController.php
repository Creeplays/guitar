<?php

namespace Niko\GuitarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NikoGuitarBundle:Default:index.html.twig', array('name' => $name));
    }
}
