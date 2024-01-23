<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function example(): Response
    {
        return new Response(
            'Dit is een voorbeeld API endpoint',
            Response::HTTP_OK
        );
    }
}
