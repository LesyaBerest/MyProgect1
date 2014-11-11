<?php

namespace Site\CoreBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends EntityRepository
{
	public function getNewsByTag($tagId){
		return $this->createQueryBuilder('n')
	    ->Where(':tag MEMBER OF n.tagInf')
	    ->setParameter('tag', $tagId)
	   	->orderBy('n.date', 'ASC')
	    ->getQuery()
	    ->getResult();
	}
	
}