<?php

namespace EGamebookBundle\Repository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends \Doctrine\ORM\EntityRepository
{
    function getLastEntity() {
        return $this->createQueryBuilder('b')->
        orderBy('b.id', 'DESC')->
        setMaxResults(1)->
        getQuery()->
        getOneOrNullResult();
    }

}
