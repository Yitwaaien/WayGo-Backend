<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Faker;


class UserFixtures extends Fixture
{


    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {


        $this->em = $entityManager;
    }

    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {



        $faker = Faker\Factory::create();
        $usersData = [
            0 => [
                'email' => ($faker->email()),
                'role' => [$faker->colorName()],
                'password' => ($faker->ean8())
            ]
        ];

        foreach ($usersData as $user) {
            $newUser = new User();

            $newUser->setEmail($user['email']);
            $newUser->setPassword($user['password']);
            $newUser->setRoles($user['role']);
            $this->em->persist($newUser);
        }

        $this->em->flush();
    }
}