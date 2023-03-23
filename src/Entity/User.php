<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Controller\UserDeleteController;
use App\Controller\UserGetItemController;
use App\Controller\UserPostController;
use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Put;



#[ApiResource(operations: [
    new Get(controller: UserController::class),
    new GetCollection(controller: UserController::class),
    new Post(controller: UserController::class),
    new Delete(controller: UserController::class ),
    new Patch(controller: UserController::class),
    new Put(controller: UserController::class)
])]
#[ORM\Entity]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $email = null;
    #[ORM\Column]
    private ?string $name = null;
    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }



    // метод для преобразования объекта в массив
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,

        ];
    }
}

