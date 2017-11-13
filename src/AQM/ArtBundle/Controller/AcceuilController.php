<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller
{
    public function indexAction()
    {
        return $this->render('AQMArtBundle:Acceuil:index.html.twig');
    }
}
