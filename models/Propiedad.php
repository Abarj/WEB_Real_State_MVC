<?php

namespace Model;

class Propiedad extends ActiveRecord {

    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedorid'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorid;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorid = $args['vendedorid'] ?? '';
    }

    public function validar() {

        if(!$this->titulo) {
            self::$errores[] = 'Debes añadir un título';
        }

        if(!$this->precio) {
            self::$errores[] = 'Debes añadir un precio';
        }

        if( strlen($this->descripcion) < 50 ) {
            self::$errores[] = 'Debes añadir una descripción de al menos 50 carácteres';
        }

        if(!$this->habitaciones) {
            self::$errores[] = 'Debes añadir el número de habitaciones';
        }

        if(!$this->wc) {
            self::$errores[] = 'Debes añadir el número de baños';
        }

        if(!$this->estacionamiento) {
            self::$errores[] = 'Debes añadir el número de plazas de garaje';
        }

        if(!$this->vendedorid) {
            self::$errores[] = 'Debes elegir un vendedor';
        }

        if(!$this->imagen) {
            self::$errores[] = 'Debes incluir al menos una imagen de la propiedad';
        }

        return self::$errores;
    }
}