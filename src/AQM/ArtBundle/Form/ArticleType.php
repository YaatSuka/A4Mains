<?php

namespace AQM\ArtBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AQM\ArtBundle\Form\ImageType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ArticleType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Entrez un nom'
                )
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Entrez une description',
                ),
                'required' => false
            ))
            ->add('prix', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Entrez un prix'
                )
            ))
            ->add('categorie', EntityType::class, array(
                'class' => 'AQMArtBundle:Categorie',
                'choice_label' => function($categorie) {
                    return $categorie->getLibelle();
                },
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => true
            ))
            ->add('etat', EntityType::class, array(
                'class' => 'AQMArtBundle:Etat',
                'choice_label' => function($etat) {
                    return $etat->getLibelle();
                },
                'placeholder' => 'Sélectionnez un état',
                'required' => true
            ))
            ->add('image', ImageType::class);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AQM\ArtBundle\Entity\Article'
        ));
    }
}