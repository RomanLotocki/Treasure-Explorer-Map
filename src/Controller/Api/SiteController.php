<?php

namespace App\Controller\Api;

use App\Entity\Site;
use App\Repository\SiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
     * @Route("/api/site", name="app_api_site")
     */
class SiteController extends AbstractController
{
    
    /**
     * sites list
     * @route("", name="browse", methods={"GET"})
     *
     * @param SiteRepository $siteRepository
     * @return JsonResponse
     */
    public function index(SiteRepository $siteRepository): JsonResponse
    {
        $sites = $siteRepository->findAll();
        return $this->json(
            $sites,
            Response::HTTP_OK,
            [], //entêtes
            ["groups" => "browse_sites"]
        );
    }

    /**
     * Read a specific site with id
     * @route("/{id}", name="read", methods={"GET"}, requirements={"id":"\d+"})
     *
     * @param Site $site
     * @return JsonResponse
     */
    public function read(Site $site = null): JsonResponse
    {
        if ($site === null){
            return $this->json("Le site recherché n'a pas été trouvé", Response::HTTP_NOT_FOUND);
        }
        return $this->json(
            $site,
            Response::HTTP_OK,
            [],
            ["groups" => "read_site"]
        );
    }
}
