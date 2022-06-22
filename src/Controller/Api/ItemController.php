<?php

namespace App\Controller\Api;

use App\Repository\ItemRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
* @Route("/api/item", name="app_api_item")
*/
class ItemController extends AbstractController
{
    
    /**
     * Liste des objets
     * @Route("", name="browse", methods={"GET"})
     *
     * @param ItemRepository $itemRepository
     * @return JsonResponse
     */
    public function browse(ItemRepository $itemRepository): JsonResponse
    {
        $items = $itemRepository->findAll();
        // var_dump($items);
        return $this->json(
            $items,
            Response::HTTP_OK,
            [], //entêtes
            ["groups" => "browse_items"
        ]);
    }
}
