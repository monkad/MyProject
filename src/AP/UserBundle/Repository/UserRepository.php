<?php

namespace AP\UserBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
	public function getUser($user)
    {
    	#le queryBuilder est un outil des repositories qui est mieux que le langage dql en terme de puissance
		$query = $this->createQueryBuilder('c')->where('c.user = :user')->setParameter('user', $user)->getQuery();

		return $query->setFirstResult();

        
    }
}
