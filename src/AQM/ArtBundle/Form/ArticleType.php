<?php

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ArticleType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('libelle', TextType::class)
            ->add('description', TextareaType::class)
            ->add('prix', TextType::class)
            ->add('categorie', EntityType::class, array(
                'class' => 'ArtBundle:Categorie',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.ordre', 'ASC');
                },
                'choice_label' => 'Catégorie'
            ))
            ->add('etat', EntityType::class, array(
                'class' => 'ArtBundle:Etat',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->orderBy('e.id', 'ASC');
                },
                'choice_label' => 'Etat'
            ));
    }
}