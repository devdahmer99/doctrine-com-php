<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once './vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
try {
    $entityManager = $entityManagerFactory->getEntityManager();
} catch (ORMException $e) {
    echo "Exception is success statement";
}

return ConsoleRunner::createHelperSet($entityManager);