<?php

namespace App\Controller;

use App\Repository\UtilitiesRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UtilitiesController extends AbstractController
{
    //Returns utilities as a json object
    public function getCollection(UtilitiesRepository $repository)
    {
        $utilities = $repository->getUtilities();

        return $this->json($utilities);
    }
}
