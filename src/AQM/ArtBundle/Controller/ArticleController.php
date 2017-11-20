<?php

namespace AQM\ArtBundle\Controller;

use AQM\ArtBundle\Entity\Article;
use AQM\ArtBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;

class ArticleController extends Controller
{
    public function indexAction()
    {
        $articles = $this->getDoctrine()->getRepository('AQMArtBundle:Article')->findAll();

        return $this->render('AQMArtBundle:Article:index.html.twig', array(
            'articles' => $articles
        ));
    }

    public function addAction(Request $request)
    {
        $article = new Article();

        $default_etat = $this->getDoctrine()->getRepository('AQMArtBundle:Etat')->find(1);

        $article->setEtat($default_etat); // Etat par défaut = 'Disponible'

        $form = $this->createArticleForm($article);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Ajout effectué');

            $articles = $em->getRepository('AQMArtBundle:Article')->findAll();

            return $this->redirectToRoute('aqm_art_articles', array(
                'articles' => $articles
            ));
        }

        return $this->render('AQMArtBundle:Article:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AQMArtBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Article introuvable');
        }

        $em->remove($article);
        $em->flush();

        $this->get('session')->getFlashBag()->add('notice', 'Suppression effectuée');

        return $this->redirectToRoute('aqm_art_articles');
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('AQMArtBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Article introuvable');
        }

        $form = $this->createArticleForm($article);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $image = $article->getImage();
            $article->setImage($image);

            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Modification effectuée');

            return $this->redirectToRoute('aqm_art_articles');
        }

        return $this->render('AQMArtBundle:Article:edit.html.twig', array(
            'form' => $form->createView(),
            'article' => $article
        ));
    }

    public function viewAction($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $categorie = $em->getRepository('AQMArtBundle:Categorie')->getCategorieBySlug($slug);

        $articles = $em->getRepository('AQMArtBundle:Article')->getArticlesByCategorie($categorie);

        return $this->render('AQMArtBundle:Article:view.html.twig', array(
            'articles' => $articles,
            'categorie' => $categorie
        ));
    }

    public function createArticleForm(Article $article)
    {
        $form = $this->createForm(ArticleType::class, $article);

        $form
            ->add('submit', SubmitType::class, array(
                'label' => 'Ajouter',
                'attr' =>  array(
                    'class' => 'btn btn-success'
                ),
            ))
            ->add('reset', ButtonType::class, array(
                'label' => 'Annuler',
                'attr' => array(
                    'class' => 'btn btn-danger',
                    'onClick' => 'javascript:location.href="'.$this->generateUrl('aqm_art_articles').'"'
                )
            ));

        return $form;
    }
}
