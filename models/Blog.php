<?php

namespace Model;

class Blog extends ActiveRecord {

    protected static $tabla = 'blogs';
    protected static $columnasDB = ['id', 'titulo', 'fecha', 'autor', 'detalles', 'imagen', 'descripcion'];

    public $id;
    public $titulo;
    public $fecha;
    public $autor;
    public $detalles;
    public $imagen;
    public $descripcion;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->fecha = date('Y/m/d');
        $this->autor = $args['autor'] ?? '';
        $this->detalles = $args['detalles'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';

    }

    public function validar() {

        if(!$this->titulo) {
            self::$errores[] = 'Debes añadir un título';
        }

        if(!$this->autor) {
            self::$errores[] = 'Debes añadir un autor';
        }

        if( strlen($this->detalles) < 100 ) {
            self::$errores[] = 'El blog debe tener mínimo 300 carácteres';
        }

        if(!$this->imagen) {
            self::$errores[] = 'Debes incluir al menos una imagen';
        }

        return self::$errores;
    }
}