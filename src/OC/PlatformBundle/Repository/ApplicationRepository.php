<?php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ApplicationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApplicationRepository extends EntityRepository
{

    public function getApplicationWithAdvert($limit){
        $qb = $this->createQueryBuilder('a');

        $qb
            ->innerJoin('a.advert','adv')
            ->addSelect('adv');


        // Puis on ne retourne que $limit résultats
        $qb->setMaxResults($limit);

//        $qb->orderBy('adv.date', 'DESC');

        return $qb
            ->getQuery()
            ->getResult();
    }

}
