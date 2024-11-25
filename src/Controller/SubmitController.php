<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
// use Symfony\Component\Mime\Email;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class SubmitController extends AbstractController
{
    //Recieves formdata, formats a new email based on formdata. 
    #[Route('/submit', name: 'app_mailer')]
    public function Submit()
    {
        $name = $_POST["name"];
        $emailadress = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $name . " önskar att diskutera Sparkz, du kan nå dem genom " . $emailadress . " eller " . $phone;
        //Symfony email, uses SMTP - for changes check MAILER_DSN in .env file
        $email = new PHPMailer(true);
        $email->isSMTP();
        $email->SMTPAuth = true;
        $email->Host = "smtp.gmail.com.";
        $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $email->Port = 587;

        $email->Username = "cabbeulv@gmail.com";
        $email->Password = "raiz evfb rjot wygl";


        $email->setFrom('cabbeulv@gmail.com', $name);
        $email->addAddress('caspianulvmane@gmail.com', 'Caspian');     // Add a recipient
        // $email->addReplyTo('cabbeulv@gmail.com', 'Information');

        $email->Subject = 'Sparkz prospekt';
        $email->Body    = $message;
        $email->AltBody = $message;


        // ->from("cabbeulv@gmail.com")
        // ->to("caspianulvmane@gmail.com")
        // ->subject("Sparkz prospekt")
        // ->text($message);

        if (!$email->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $email->ErrorInfo;
        } else {
            return $this->render('/landingpage/thankyou.html.twig');
        }
        // After email is sent navigate to thankyou.html.twig
        exit;
    }
}
