<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



class Send_Correo
{
    		private $fromEmail;
		private $toEmail;
		private $subjectName;
		private $message;
        private $password;
        private $password_email;
        private $logitud_passw;
        private $pssw_auto;
        private $info_solicitud;
        private $date;
        
        function __construct()
        {
            $this->fromEmail = "andreyviquez1@gmail.com";
            $this->password_email = "abiptdcsnexazbfq";
            $this->logitud_passw= 10;
            $this->info_solicitud = "0";
            $this->message="";
            $this->get_date();
            //Generamos contraseña al momento de instanciar Obj
            $this->generate_password();

        }
        
        public function get_date()
        {
            //Set time and Country
            date_default_timezone_set('America/Costa_Rica');
            $this->date = date('Y-m-d H:i:s');
        }
        
        public function verificar_info_solicitud($respuesta_insercion)
        {
        if($respuesta_insercion > 1){
                $this->info_solicitud = "Hola, tienes un Nuevo Ticket Asignado a tu Nombre "."<br>"." Fecha solicitud: "."$this->date"."<br>"."TICKET ID: ".$this->passw_auto."<hr>";
            }
            elseif ($respuesta_insercion == 0) {
                $this->info_solicitud = "Hola, tienes un Nuevo Ticket Asignado a tu Nombre "."<br>"." Fecha solicitud: "."$this->date"."<br>"."TICKET ID: ".$this->passw_auto."<hr>";
            }
            else{
                $this->info_solicitud = "ERROR OMITIR CORREO:".$this->date." ";
            }
        }

        public function generate_password()
        {
            $this->passw_auto = substr( md5(microtime()), 1,  $this->logitud_passw);
        }

        public function send_email_new_password($name,$toEmail,$new_password)
        {
            try {            
                $mail = new PHPMailer(true);
                $to = $toEmail;
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $this->fromEmail;                     //SMTP username
                $mail->Password   = $this->password_email;                               //SMTP password
                $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($this->fromEmail, 'Globals+ Nuevo Password');
                $mail->addAddress($toEmail);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Globals+ Nuevo Password';
                $mail->Body = '<!doctype html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Document</title>
                </head>
                <body>
                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$this->message.'</span>
                    <div class="container">
                    <h3>Nuevo Password Generado:
                     '.$this->message .$new_password.'<br>  </h3>
                     Hora Solicitud: '.$this->date.'.
                      <center>  
                        <br/>Password Solicitado por:
                      '.$to.'. 
                      <h4><span span="" style="color: rgb(161, 204, 27);">©2021</span> Globals<span span="" style="color: rgb(161, 204, 27);">+</span></h4>
                      </center>

                    </div>
                </body>
                </html>';

                $mail->send();
                    echo 'El mensaje se envio correctamente';
                } catch (Exception $e) {
                    echo "Error al enviar mensaje: {$mail->ErrorInfo}";
                }
        }

        public function send_email_solicitud_new_user($respuesta_insercion,$toEmail)
        {  
            try {
                            $mail = new PHPMailer(true);
                //Verificamos mjs a enviar
                $this->verificar_info_solicitud($respuesta_insercion);
                $to = $toEmail;
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $this->fromEmail;                     //SMTP username
                $mail->Password   = $this->password_email;                               //SMTP password
                $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($this->fromEmail, 'GLOBALS+ Ticket-Nuevo Usuario');
                $mail->addAddress($toEmail);     //Add a recipient
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'GLOBALS+ Ticket-Nuevo Usuario';
                $mail->Body = '<!doctype html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Document</title>
                </head>
                <body>
                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$this->message.'</span>
                    <div class="container">
                     '.$this->message .$this->info_solicitud.'<br/>
                    
                      <center>  
                        <br/>Encargado:
                      '.$to.'. 
                      <h4><span span="" style="color: rgb(161, 204, 27);">©2021</span> Globals<span span="" style="color: rgb(161, 204, 27);">+</span></h4>
                      </center>

                    </div>
                </body>
                </html>';

                $mail->send();
                    echo 'El mensaje se envio correctamente';
                } catch (Exception $e) {
                    echo "Error al enviar mensaje: {$mail->ErrorInfo}";
                }
        }

        

}
?>