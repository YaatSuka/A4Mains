<?php

namespace AQM\ArtBundle\Repository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function getArticlesByCategorie($categorie)
    {
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder
            ->where($queryBuilder->expr()->eq('a.categorie', $categorie->getId()))
            ->addOrderBy('a.etat', 'ASC')
            ->addOrderBy('a.id', 'DESC');
        return $queryBuilder->getQuery()->getResult();
    }

    public function getLastArticlesFromCategorie($categorie, $limit) {
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder
            ->where($queryBuilder->expr()->eq('a.categorie', $categorie->getId()))
            ->andWhere('a.etat = 1')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults($limit);
        return $queryBuilder->getQuery()->getResult();
    }

    public function getArticlesOrderByCategorie()
    {
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder
            ->addOrderBy('a.categorie')
            ->addOrderBy('a.nom');

        return $queryBuilder->getQuery()->getResult();
    }
}
