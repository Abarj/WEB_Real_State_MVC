<?php

namespace Controllers;

use Model\Blog;
use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {

    public static function index(Router $router) {

        $propiedades = Propiedad::get(3);

        $blogs = Blog::get(2);

        $inicio = true;

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio,
            'blogs' => $blogs
        ]);
    }

    public static function nosotros(Router $router) {

        $router->render('paginas/nosotros');
    }

    public static function propiedades(Router $router) {

        $propiedades = Propiedad::all();

        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router) {

        $id = validarORedireccionar('/propiedades');

        //Buscar la propiedad por su ID
        $propiedad = Propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router) {

        $blogs = Blog::all();

        $router->render('paginas/blog', [
            'blogs' => $blogs
        ]);
    }

    public static function entrada(Router $router) {

        $id = validarORedireccionar('/blog');

        //Buscar la entrada por su ID
        $blog = Blog::find($id);

        $router->render('paginas/entrada', [
            'blog' => $blog
        ]);
    }

    public static function contacto(Router $router) {

        $mensaje = null;

        // Ejecutar el código después de que el usuario envie el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];

            // Crear una instancia de PHPMailer
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '61bb32a8122b85';
            $mail->Password = 'c3e50950cda964';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Configurar el contenido del mail
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';

            // Eliminar de forma condicional algunos campos de email / teléfono
            if($respuestas['contacto'] === 'telefono') {
                $contenido .= '<p>Ha elegido ser contactado por teléfono:</p>';
                $contenido .= '<p>Teléfono: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Fecha Contacto: ' . $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Hora: ' . $respuestas['hora'] . '</p>';
            }
            else {
                $contenido .= '<p>Ha elegido ser contactado por email:</p>';
                $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
            }

            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Vende / Compra: ' . $respuestas['tipo'] . '</p>';
            $contenido .= '<p>Precio / Presupuesto: ' . $respuestas['precio'] . '€</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';

            // Enviar el email
            if($mail->send()) {
                $mensaje = "Mensaje enviado correctamente";
            }
            else {
                $mensaje =  "El mensaje no se pudo enviar...";
            }
        }

        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
}