<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;



class ThanksController extends AbstractController
{
    #[Route('/thanks')]
    public function Thanks()
    {
        return $this->render('/landingpage/thankyou.html.twig');
        exit;
    }
}