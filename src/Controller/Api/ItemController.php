<?php

namespace App\Controller\Api;

use App\Entity\Item;
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
     * items list
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

    /**
     * Read a specific item with id
     * @Route("/{id}", name="read", methods={"GET"}, requirements={"id":"\d+"})
     *
     * @param Item $item
     * @return JsonResponse
     */
    public function read(Item $item = null): JsonResponse
    {
        if ($item === null){
            return $this->json("L'objet recherché n'a pas été trouvé", Response::HTTP_NOT_FOUND);
        }
        return $this->json(
            $item,
            Response::HTTP_OK,
            [],
            ["groups" => "read_item"
        ]);
    }
}
