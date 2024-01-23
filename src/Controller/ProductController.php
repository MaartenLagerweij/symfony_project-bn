<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;
use Symfony\Component\Serializer\SerializerInterface;

class ProductController extends AbstractController
{
    /**
     * @Route("/api/products", name="api_products")
     */
    public function getAllProducts(EntityManagerInterface $entityManager, SerializerInterface $serializer)
    {
        $productRepository = $entityManager->getRepository(Product::class);
        $products = $productRepository->findAll();

        // Serialize products to JSON and return as JsonResponse
        $jsonData = $this->serializeProducts($products, $serializer);

        return new JsonResponse($jsonData);
    }

    private function serializeProducts($products, SerializerInterface $serializer)
    {
        // Serialize products to JSON using Symfony's Serializer component
        $jsonData = $serializer->serialize($products, 'json');

        return $jsonData;
    }
}
