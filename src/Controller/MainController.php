<?php

namespace App\Controller;

use App\Repository\UtilitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    // Retrievs utilities from repository, renders landingpage sending utilities as params
    #[Route('/')]
    public function Main(UtilitiesRepository $repository)
    {
        $utilities = $repository->getUtilities();

        return $this->render('/landingpage/landing.html.twig', ["utilities" => $utilities]);
        exit;
    }
}
