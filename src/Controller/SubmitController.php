<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use PHPMailer\PHPMailer\PHPMailer;

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

        //PHPMailer simplifies emailing process
        //SMTP authorization using Gmail
        $email = new PHPMailer(true);
        $email->isSMTP();
        $email->SMTPAuth = true;
        $email->Host = "smtp.gmail.com.";
        $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $email->Port = 587;

        //To change sender email, change username and generate new password at - https://myaccount.google.com/apppasswords?continue=https://myaccount.google.com/security?rapt%3DAEjHL4N-mZBt3Fkj2zCMTCKAlKCfiujvz7zCl4jVkPXVQuX7a1DP3UtwCXxR26Z_hMZoIKIupiGSV52pc_YrsoITN-Pms21n_2oHPN8VbY3-vFJq-bZFI-s&pli=1&rapt=AEjHL4PRkRbIoQxkve58N-ITKd2FlWy54mMr9TLNFYhAmhuaJXGiVs0rG9m7WXwgeHyTAvZwarjp3wfkoOLomKI2EZPU1PviR9uKdcoTX7H8IYsVp9DQybg
        $email->Username = "cabbeulv@gmail.com";
        $email->Password = "raiz evfb rjot wygl";

        //Sets from address and name of prospect
        $email->setFrom($email, $name);
        //To change email of reciever simply write a diffrent email in the first param position (Should be Jens Grip)
        $email->addAddress('caspianulvmane@gmail.com', 'Caspian');

        //To change subject of email simply change the text "Spakrz prospekt" to a fitting string 
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
