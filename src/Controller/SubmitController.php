<?php

namespace App\Controller;

use App\Repository\UtilitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class SubmitController extends AbstractController
{
    #[Route('/submit')]
    public function Submit()
    {
        var_dump($_POST);
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = `$name önskar att diskutera Sparkz, du kan nå dem genom $email eller $phone`;
        if (mail("caspianulvmane@gmail.com", "Sparkz prospekt", $message)) {
            echo "mail sent";
        }
        exit;
    }
}
