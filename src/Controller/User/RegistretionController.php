<?php

namespace App\Controller\User;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class RegistretionController extends AbstractController
{
    public function __construct (
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $hasher
    ) {
    }

    public function __invoke (User $user): JsonResponse
    {
        $user->setRoles(['ROLE_USER']);
        $hashedPassword = $this->hasher->hashPassword($user, $user->getPassword());
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return new JsonResponse(['message'=>'Ok'],\Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
    }

}