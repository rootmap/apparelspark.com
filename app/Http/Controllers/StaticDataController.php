<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//MenuPageController::loggedUser('company_prefix')
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;

use Illuminate\Support\Facades\URL;

class StaticDataController extends Facade {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected static function getFacadeAccessor() {
        //what you want
        return $this;
    }

    public $AutorizeNet_LOGIN_API_ID="2a7Yx36V9W";
    public $AutorizeNet_TRANSACTION_KEY="6bS9C28V2sU753rY";

    

    public function initMail(
        $to='',
        $subject='',
        $body='',
        $AltBody='This is the body in plain text for non-HTML mail clients',
        $attachment='',
        $debug=0
    )
    {
          $mail = new PHPMailer(true);
          try {
              $mail->SMTPDebug = $debug;
              $mail->isSMTP(); 
              $mail->Host = 'mail.simpleretailpos.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'automail@simpleretailpos.com';
              $mail->Password = 'automail';
              $mail->SMTPSecure = 'tls';
              $mail->Port = 587;

              $mail->setFrom('automail@simpleretailpos.com', 'Simple Retail POS');

              //$mail->addAddress($to, 'Fahad Bhuyian');
              $mail->addAddress($to);               // Name is optional
              $mail->addReplyTo('support@simpleretailpos.com', 'Reply - Simple Retail Pos');
             // $mail->addCC('cc@example.com');
             // $mail->addBCC('bcc@example.com');

              //Attachments
              if(!empty($attachment))
              {
                 $mail->addAttachment($attachment);
              }
              //$mail->addAttachment('/var/tmp/file.tar.gz');
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

              //Content
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body    = $body;
              $mail->AltBody = $AltBody;
              $mail->send();
              return 1;
          } catch (Exception $e) {
              if($debug>0)
              {
                  return 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
              }
              else
              {
                  return 0;
              }
          }
    }
    
    

}
