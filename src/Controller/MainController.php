<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\UtilitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mime\Email;


class MainController extends AbstractController
{
    #[Route('/')]
    public function Main(UtilitiesRepository $repository, Request $request, MailerInterface $mailer)
    {
        $utilities = $repository->getUtilities();

        return $this->render('/landingpage/landing.html.twig', ["utilities" => $utilities]);
        exit;
    }
}
