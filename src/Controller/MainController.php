<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{

    #[Route('/')]
    public function Main()
    {

        return $this->render('/landingpage/landing.html.twig');
        exit;
    }
}
