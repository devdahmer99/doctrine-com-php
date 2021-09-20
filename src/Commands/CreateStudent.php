<?php
use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Student;

require_once __DIR__ .'/../../vendor/autoload.php';

$student = new Student();
$student->setName($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($student);

$entityManager->flush();