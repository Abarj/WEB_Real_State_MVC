<?php

namespace Controllers;

use MVC\Router;
use Model\Vendedor;

class VendedorController {

    public static function crear(Router $router) {

        $vendedor = new Vendedor;

        // Array con mensajes de errores
        $errores = Vendedor::getErrores();

        // Ejecutar el código después de que el usuario envie el formulario
        if($_SERVER["REQUEST_METHOD"] === 'POST') {
        
            /** CREA UNA NUEVA INSTANCIA */
            $vendedor = new Vendedor($_POST['vendedor']);
    
            // Validar
            $errores = $vendedor->validar();
    
            // Revisar que el array de errores esté vacio
            if(empty($errores)) {
                $vendedor->guardar();
            }
        }

        $router->render('vendedores/crear', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function actualizar(Router $router) {
        
        $errores = Vendedor::getErrores();

        $id = validarORedireccionar('/admin');

        // Obtener datos del vendedor a actualizar
        $vendedor = Vendedor::find($id);

        if($_SERVER["REQUEST_METHOD"] === 'POST') {

            // Asignar los valores
            $args = $_POST['vendedor'];
    
            // Sincronizar objeto en memoria con lo que el usuario escribió
            $vendedor->sincronizar($args);
    
            // Validación
            $errores = $vendedor->validar();
    
            // Revisar que el array de errores esté vacio
            if(empty($errores)) {
                $vendedor->guardar();
            }
        }

        $router->render('vendedores/actualizar', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);

    }

    public static function eliminar() {
        
        if($_SERVER["REQUEST_METHOD"] === 'POST') {

            // Valida el id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id) {
                // Valida el tipo a eliminar
                $tipo = $_POST['tipo'];

                if(validarTipoContenido($tipo)) {
                    $vendedor = Vendedor::find($id);
                    $vendedor->eliminar();
                }
            }

        }
    }
}