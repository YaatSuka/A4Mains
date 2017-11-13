<?php

namespace AQM\ArtBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AQM\ArtBundle\Entity\Categorie;

class LoadCategories implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories = array(
            array(
                "nom" => "attrapes_reves",
                "libelle" => "Attrapes Rêves",
                "ordre" => 1
            ),
            array(
                "nom" => "bougeoirs",
                "libelle" => "Bougeoirs",
                "ordre" => 2
            ),
            array(
                "nom" => "portes_encens",
                "libelle" => "Portes Encens",
                "ordre" => 3
            ),
            array(
                "nom" => "tableaux",
                "libelle" => "Tableaux",
                "ordre" => 4
            ),
            array(
                "nom" => "divers",
                "libelle" => "Divers",
                "ordre" => 5
            ),
        );

        foreach ($categories as $categorie) {
            $category = new Categorie;

            $category->setNom($categorie['nom']);
            $category->setLibelle($categorie['libelle']);
            $category->setOrdre($categorie['ordre']);
            $manager->persist($category);
        }

        $manager->flush();
    }
}