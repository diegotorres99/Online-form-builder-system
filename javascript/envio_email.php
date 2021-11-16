<?php

class Send_Correos{
		private $fromEmail;
		private $toEmail;
		private $subjectName;
		private $message;
        private $password;
        private $logitud_passw;
        private $pssw_auto;
        private $info_solicitud;
        private $date;
        function __construct()
        {
            $this->fromEmail = "no-reply@mail.wstudio.app";
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
            $to = $toEmail;
            $subject = "NUEVA CONTRASEÑA GLOBALS+ FORMULARIOS";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$this->fromEmail.'<'.$this->fromEmail.'>' . "\r\n".'Reply-To: '.$this->fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
            $this->message = '<!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport"
                              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>Document</title>
                    </head>
                    <body>
                    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$this->message.'</span>
                        <div class="container">
                        <h3>Contraseña:
                         '.$this->message .$new_password.'<br/>  </h3>
                         Hora Solicitud: '.$this->date.'. 
                       
                          <center>  
                            <br/>Contraseña Solicitada por:
                          '.$to.'. 
                          <h4><span span="" style="color: rgb(161, 204, 27);">©2021</span> Globals<span span="" style="color: rgb(161, 204, 27);">+</span></h4>
                          </center>

                        </div>
                    </body>
                    </html>';
                    $result = @mail($to, $subject, $this->message, $headers);
        }
        public function send_email_solicitud_new_user($respuesta_insercion,$toEmail)
        {   //Verificamos mjs a enviar
            $this->verificar_info_solicitud($respuesta_insercion);
            $to = $toEmail;
            $subject = "GLOBALS+ Ticket-Nuevo Usuario";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$this->fromEmail.'<'.$this->fromEmail.'>' . "\r\n".'Reply-To: '.$this->fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
            $this->message = '<!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
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
                    $result = @mail($to, $subject, $this->message, $headers);
        }

}
?>
