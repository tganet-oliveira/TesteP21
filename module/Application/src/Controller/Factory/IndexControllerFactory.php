<?php


namespace Application\Controller\Factory;


use Application\Controller\IndexController;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

class IndexControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $entityManager = $container->get(EntityManager::class);
        return new IndexController($entityManager);
    }
}