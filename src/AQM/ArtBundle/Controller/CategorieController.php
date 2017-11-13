<?php

namespace AQM\ArtBundle\Controller;

use AQM\ArtBundle\Entity\Categorie;
use AQM\ArtBundle\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CategorieController extends Controller
{
    public function indexAction()
    {
        $categories = $this->getDoctrine()->getRepository('AQMArtBundle:Categorie')->findAll();

        return $this->render('AQMArtBundle:Categorie:index.html.twig', array(
            'categories' => $categories
        ));
    }

    public function addAction(Request $request)
    {
        $categorie = new Categorie();
        $maxOrdre = $this->getDoctrine()->getRepository('AQMArtBundle:Categorie')->getOrdreMax();
        $categorie->setOrdre($maxOrdre + 1);

        $form = $this->createAddForm($categorie);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Ajout effectué');
            /*$session = new Session();
            $session->start();
            $session->getFlashBag()->add('notice', 'Ajout effectué');*/

            $categories = $this->getDoctrine()->getRepository('AQMArtBundle:Categorie')->findAll();

            return $this->redirectToRoute('aqm_art_categories', array(
                'categories' => $categories
            ));
        }
        return $this->render('AQMArtBundle:Categorie:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function createAddForm(Categorie $categorie)
    {
        $form = $this->createForm(CategorieType::class, $categorie, array(
            /*'action' => $this->generateUrl('aqm_art_categories'),
            'method' => 'POST'*/
        ));

        $form
            ->add('submit', SubmitType::class, array(
            'label' => 'Ajouter',
            'attr' => array(
                'class' => 'btn btn-success'
                ),
            ))
            ->add('reset', ButtonType::class, array(
                'label' => 'Annuler',
                'attr' => array(
                    'class' => 'btn btn-danger',
                    'onClick' => 'javascript:location.href="'.$this->generateUrl('aqm_art_categories').'"'
                )
            ));

        return $form;
    }
}
