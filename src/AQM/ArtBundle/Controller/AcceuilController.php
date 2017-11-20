<?php

namespace AQM\ArtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AQMArtBundle:Categorie')->findAll();

        $articles = array();
        foreach ($categories as $categorie) {
            $results = $em->getRepository('AQMArtBundle:Article')->getLastArticlesFromCategorie($categorie, 2);
            foreach ($results as $result) {
                $articles[] = $result;
            }
        }

        return $this->render('AQMArtBundle:Acceuil:index.html.twig', array(
            'articles' => $articles
        ));
    }
}
