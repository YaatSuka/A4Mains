<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function navBarAction()
    {
        $categories = $this->getDoctrine()->getRepository('AQMArtBundle:Categorie')->getCategoriesByOrdre();

        return $this->render('AQMArtBundle:Menu:menu.html.twig', array('categories' => $categories));
    }
}
