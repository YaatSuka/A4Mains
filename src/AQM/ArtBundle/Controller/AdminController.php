<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AQMArtBundle:Admin:index.html.twig');
    }

    public function profilAction()
    {
        return $this->render('AQMArtBundle:Admin:profil.html.twig');
    }
}
