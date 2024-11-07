<?php

namespace App\Controller;

use App\Repository\UtilitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{
    #[Route('/')]
    public function Main(UtilitiesRepository $repository)
    {
        $utilities = $repository->getUtilities();
        return $this->render('/landingpage/landing.html.twig', ["utilities" => $utilities]);
        // return $this->render('base.html.twig');
        exit;
    }
}
