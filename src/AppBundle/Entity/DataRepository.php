<?php

namespace AppBundle\Entity;
use Doctrine\ORM\EntityRepository;

class DataRepository extends EntityRepository {
    public function showData($usersGroupId, $startDate, $endDate, $dataType){
        $repository = $this->getDoctrine()->getRepository('AppBundle\Entity:Data');
        
        $query = $repository->createQueryBuilder('data')
            ->where('data.usersGroup = :usersGroupId')
            ->andwhere('data.date >= :startDate')
            ->andwhere('data.date <= :endDate')
            ->andwhere('data.dataType = :dataType')
            ->setParameters(array(
                'usersGroupId' => $usersGroupId,
                'startDate' => $startDate,
                'endDate' => $endDate,
                'dataType' => $dataType));
        $result = $query->getQuery()->getResult();
        return $result;       
    }
    
    
    
}
