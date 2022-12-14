<?php

    class Email{
        
             
        function __construct()
            {
                $mail = new PHPMailer(true);

           
                    //Server settings
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'vps.dankicode.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'teste@dankicode.com';                     //SMTP username
                    $mail->Password   = 'gui123456';                               //SMTP password
                    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('teste@dankicode.com', 'Bruno');
                    $mail->addAddress('brupoke@gmail.com', 'Bruno');     //Add a recipient
                    $mail->addAddress('contato@bsacode.com');               //Name is optional
                   // $mail->addReplyTo('info@example.com', 'Information');
                   // $mail->addCC('cc@example.com');
                   // $mail->addBCC('bcc@example.com');

                    //Attachments
                   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Assunto do email : "E-mail de teste"';
                    $mail->Body    = 'Conteúdo do Email <b>Com Código!</b>';
                    $mail->AltBody = 'Conteúdo do Email sem código';

                    $mail->send();
                    echo 'Message has been sent';
               
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                
              
            }
        }
?>