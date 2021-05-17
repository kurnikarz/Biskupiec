<?php


namespace App\Repository;
use Doctrine\ORM\EntityRepository;

class OrdersRepository extends EntityRepository
{
    public function findOrders()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM ps_orders';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        var_dump($stmt->fetchAll());
    }
}