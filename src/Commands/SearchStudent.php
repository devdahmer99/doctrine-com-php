<?php
require_once __DIR__ . '../../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerFactory;

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$studentRepository = $entityManager->getRepository(Student::class);

/**
 * var Student [] $studentList
 */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: {$student->getId()}\nNome: {$student->getName()}\n\n";
}

$nameComplete = $studentRepository->findBy([
    'name' => 'Eduardo Dahmer Correa'
]);