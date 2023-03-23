<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{


    /**
    * @Route("/users/{id}", name="Get", methods={"GET"})
    */
    public function Get(int $id): JsonResponse
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($user->toArray(), JsonResponse::HTTP_OK);
    }
    public function GetCollection (Request $request): JsonResponse
    {
        // получаем список всех пользователей
        $collection = $this->getDoctrine()->getRepository(User::class)->findAll();

        // преобразуем список в массив для ответа в формате JSON
        $response = [];
        foreach ($collection as $item) {
            $response[] = $item->toArray(); // используем метод toArray() нашей сущности User
        }

        // возвращаем список пользователей в формате JSON
        return new JsonResponse($response);
    }
    /**
     * @Route("/users/{id}", methods={"DELETE"})
     */
    public function Delete(Request $request, User $user): JsonResponse
    {
        // получаем менеджер сущностей
        $entityManager = $this->getDoctrine()->getManager();

        // удаляем пользователя
        $entityManager->remove($user);
        $entityManager->flush();

        // возвращаем ответ в формате JSON
        return new JsonResponse(['message' => 'User deleted'], JsonResponse::HTTP_NO_CONTENT);
    }
}
