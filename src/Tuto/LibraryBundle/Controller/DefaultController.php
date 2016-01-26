<?php

namespace Tuto\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutoLibraryBundle:Default:index.html.twig');
    }
}
