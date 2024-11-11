<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mime\Email;


class SubmitController extends AbstractController
{
    //Recieves formdata, formats a new email based on formdata. 
    #[Route('/submit', name: 'app_mailer')]
    public function Submit(MailerInterface $mailer)
    {
        $name = $_POST["name"];
        $emailadress = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $name . " önskar att diskutera Sparkz, du kan nå dem genom " . $emailadress . " eller " . $phone;
        //Symfony email, uses SMTP - for changes check MAILER_DSN in .env file
        $email = (new Email())
            ->from("cabbeulv@gmail.com")
            ->to("caspianulvmane@gmail.com")
            ->subject("Sparkz prospekt")
            ->text($message);

        $mailer->send($email);
        // After email is sent navigate to thankyou.html.twig
        return $this->render('/landingpage/thankyou.html.twig');
        exit;
    }
}
