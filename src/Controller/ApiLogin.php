<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiLogin extends AbstractController
{
    /**
     * @Route("/api/login", name="api_login", methods={"POST"})
     */
    public function login(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Hier zou je de gebruikersnaam en wachtwoord verwerken
        $username = $data['username'] ?? null;
        $password = $data['password'] ?? null;

        // Voorbeeld van een check (in de praktijk zou je hier de database raadplegen)
        if ($username === 'maarten' && $password === 'benntec') {
            return new JsonResponse(['status' => 'succes', 'message' => 'Login success']);
        } else {
            return new JsonResponse(['status' => 'error', 'message' => 'Wrong login details'], Response::HTTP_UNAUTHORIZED);
        }
    }
}
