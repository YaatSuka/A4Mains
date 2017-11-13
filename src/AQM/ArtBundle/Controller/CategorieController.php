<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    public function indexAction()
    {
        // Créer et charger le formulaire
        return $this->render('AQMArtBundle:Categorie:index.html.twig');
    }
}
