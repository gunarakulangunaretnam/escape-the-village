<?php 

use PHPMailer\PHPMailer\PHPMailer;

class EmailClass{
    
        public function __construct(){
            
        }

           
        public function credentialsGetter(){

            $email = "";
            $password = "";
            
            $handle = fopen("../php-classes/credentials/credentials.txt", "r");

            if($handle) {
                while (($line = fgets($handle)) !== false) {
                    $pieces = explode("=", $line);

                    if($pieces[0] == "email"){

                        $email = $pieces[1]; 
                    
                    } else if($pieces[0] == "password"){
                        
                        $password = $pieces[1];
                        
                    }

                }
                fclose($handle);
            } else {
                // error opening the file.
            } 

            return [$email,$password];          
        }


        function registerationOTPSender($ReceiverEmail, $otpNumber){
            $name = "Escape The Villange";  // Name of your website or yours
            $to = $ReceiverEmail;  // mail of reciever
            $subject = "OTP Number for Your Account Registration";
            
            $body = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
            <div style="margin:50px auto;width:70%;padding:20px 0">
              <div style="border-bottom:1px solid #eee">
                <a href="#" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600;">Escape The Village: Your Verification Code</a>
              </div>
              <p style="font-size:1.1em">Dear Player,</p>
              <p>Thank you for registering an account with us!!!</p>
              <p>Enter the following OTP to complete your account registeration!!!</p>
              
              <h2 style="background: #00466a;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otpNumber.'</h2>
              
              <p><span style="color:red;">WARNING: </span>Never share this OTP with anyone for any reasons!</p>
             
              <h3 style="color:green;">Happy Playing!!!</h3>
              <p style="font-size:0.9em;">Best Regards,<br />Escape The Village</p>
              <hr style="border:none;border-top:1px solid #eee" />
            </div>
          </div>';
    
            $credentialData = $this->credentialsGetter();
          
            $from = $credentialData[0];  // you mail
            $password = $credentialData[1];  // your mail password
    
            // Ignore from here
    
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";
            $mail = new PHPMailer();
    
            // To Here
    
            //SMTP Settings
            $mail->isSMTP();
            // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
            $mail->Host = "smtp.gmail.com"; // smtp address of your email
            $mail->SMTPAuth = true;
            $mail->Username = $from;
            $mail->Password = $password;
            $mail->Port = 587;  // port
            $mail->SMTPSecure = "tls";  // tls or ssl
            $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                ]
            ]);
    
            //Email Settings
            $mail->isHTML(true);
            $mail->setFrom($from, $name);
            $mail->addAddress($to); // enter email address whom you want to send
            $mail->Subject = ("$subject");
            $mail->Body = $body;
            if ($mail->send()) {
                return "[EMAIL_SENT]";
            } else {
                return "[EMAIL_FAILED]";
            }
        }
    

}



?>