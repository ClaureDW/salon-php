<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $nombre;
    public $email;
    public $token;

    public function __construct($nombre, $email, $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        // Crear el objeto del email
        // Instanciar $phpmailer
        $phpmailer = new PHPMailer();

        // Configurar SMTP
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['MAIL_HOST'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['MAIL_PORT'];
        $phpmailer->Username = $_ENV['MAIL_USER'];
        $phpmailer->Password = $_ENV['MAIL_PASS'];
        $phpmailer->SMTPSecure = 'tls';

        // Configurar el contenido del mail
        $phpmailer->setFrom('admin@appsalon.com');
        $phpmailer->addAddress('admin@appsalon.com', 'AppSalon.com');
        $phpmailer->Subject = 'Confirma tu cuenta';

        // Habilitar HTML
        $phpmailer->isHTML(true);
        $phpmailer->CharSet = 'UTF-8';

        // debuguear($respuesta);

        // Definir el Contenido
        $contenido = '<html>';
        $contenido .= '<p>Tienes un nuevo Mensaje</p>';
        $contenido .= '<p>Hola <strong>' . $this->email . '</strong> Has creado tu cuenta en AppSalon, solo debes confirmar presionando el siguiente enalce</p>';
        $contenido .= "<p>Presiona aquì: <a href='http://" . $_ENV['APP_URL'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';

        $phpmailer->Body = $contenido;
        // debuguear($contenido);

        // Enviar E-mail
        $phpmailer->send();
    }

    public function enviarInstrucciones()
    {
        // Crear el objeto del email
        // Instanciar $phpmailer
        $phpmailer = new PHPMailer();

        // Configurar SMTP
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['MAIL_HOST'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['MAIL_PORT'];
        $phpmailer->Username = $_ENV['MAIL_USER'];
        $phpmailer->Password = $_ENV['MAIL_PASS'];
        $phpmailer->SMTPSecure = 'tls';

        // Configurar el contenido del mail
        $phpmailer->setFrom('admin@appsalon.com');
        $phpmailer->addAddress('admin@appsalon.com', 'AppSalon.com');
        $phpmailer->Subject = 'Reestablece tu password';

        // Habilitar HTML
        $phpmailer->isHTML(true);
        $phpmailer->CharSet = 'UTF-8';

        // debuguear($respuesta);

        // Definir el Contenido
        $contenido = '<html>';
        $contenido .= '<p>Tienes un nuevo Mensaje</p>';
        $contenido .= '<p>Hola<strong>' . $this->nombre . '</strong> has solicitado reestablecer tu password, sigue el siguiente enclae para hacerlo.</p>';
        $contenido .= "<p>Presiona aquì: <a href='http://" . $_ENV['APP_URL'] . "/recuperar?token=" . $this->token . "'>Reestablecer Password</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';

        $phpmailer->Body = $contenido;
        // debuguear($contenido);

        // Enviar E-mail
        $phpmailer->send();
    }
}
